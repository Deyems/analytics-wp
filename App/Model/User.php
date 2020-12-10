<?php

namespace App\Model;

use App\Database\DB;
/**
 * Class User
 *
 * @package \App\Model
 */
class User {

    protected static $table = 'users';

    public static function create(array $data)
    {
        return DB::insert(static::$table, $data);
    }

    public static function findByEmail($email) 
    {
        $mysqli_result = DB::queryRaw('SELECT * FROM users WHERE email=%s', $email);
        return $mysqli_result->fetch_object();
    }

    public static function findAll()
    {
        $result = DB::query('SELECT * FROM '. static::$table);
        return $result;
    }

    public static function updateLastLogin($id)
    {
       return  DB::query('UPDATE ' . static::$table . ' SET last_login =%s WHERE id = %d', date('Y-m-d H:i:s'), $id);
    }
}
