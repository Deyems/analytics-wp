<?php
namespace App\Controllers;

use App\Model\User;
use App\Validators\Validation;

/**
 * Class AuthController
 *
 * @package \App\Controllers
 */
class AuthController extends BaseController
{

    public function login() {
        $this->loadView('login', ['title' => 'Sign in']);
    }

    public function processLogin() {
        // try{
            
            $email = Validation::validateEmail($this->request->param('email'));
            $password = $this->request->param('password');

            if(!$email){
                // throw new \Exception('Email is not valid');
                $this->session->setFlashData('error', 'Email is invalid');
            }

            $user = User::findByEmail($email);
            if(!$user)  {
                $this->session->setFlashData('error', 'Unable to login');
                return $this->redirect('/auth/login');
            }

            if(!password_verify($password, $user->password)) {
                $this->session->setFlashData('error', 'Unable to login');
                $this->redirect('/auth/login');
            }

            // set session
            User::updateLastLogin($user->id);
            $this->session->setSessionData(USER_SESSION_KEY_NAME, $user->id);
            $this->session->setFlashData('success', 'You are logged in');
            $this->redirect('/');
        // }catch(\Exception $e){
            // throw new \Exception($e->getMessage());
        // }
    }


    public function register()
    {
        $this->loadView('register', ['title' => 'Sign up']);
        
    }


    public function processReg()
    {
        // try{
            $email = Validation::validateEmail($this->request->param('email'));
            $password = $this->request->param('password');
            $username = Validation::validateNonRequiredField($this->request->param('username'));
            $c_pass = $this->request->param('c_password');

            //Check for empty required Fields
            $data = [
                'email' => $email,
                'password' => $password,
                'c_password' => $c_pass
            ];

            if(!Validation::isAnyFieldEmpty($data)){
                // throw new \Exception('Your fields cannot be empty');
                $this->session->setFlashData('error', 'Your fields cannot be empty');
                return $this->redirect('/auth/register');
            };

            if(!$email){
                // throw new \Exception('Email is not valid');
                $this->session->setFlashData('error', 'Email is invalid');
                return $this->redirect('/auth/register');
            }

            if(!Validation::checkPassword($password, $c_pass)){
                // throw new \Exception('Passwords are not the SAME!');
                $this->session->setFlashData('error', 'Passwords are not the SAME!');
                return $this->redirect('/auth/register');
            }

            $old = User::findByEmail($email);
            if($old){
                $this->session->setFlashData('error', 'User already Exists');
                return $this->redirect('/auth/register');
            }

            $result = User::create([
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'name' => $username,
            ]);

            if(!$result) {
                $this->session->setFlashData('error', 'unable to create user account');
                return $this->redirect('/auth/register');
                // return;
            }
            $this->session->setFlashData('success', 'Account created successfully');
            $this->redirect('/auth/login');

        // }catch(\Exception $e){
            // $this->redirect('/auth/login?msg='.$e->message());
            // throw new \Exception($e->getMessage());
        // }
        
    }
    
    public function forgot(){
        $this->loadView('forgot', ['title' => 'Forgot Password']);
    }

    public function logout(){
        $this->session->delete();
        $this->session->setFlashData('info', 'You are now logged out');
        $this->redirect('/auth/login');
    }
}
