<?php require_once 'partials/header.php' ?>
        <div class="dashboard--authors">
            <div class="searchbar">
                <div>
                    <form action="" method="get">
                        <input type="search" class="search--area" placeholder="Search for author">
                    </form>
                </div>
                <div>
                    <img src="uploads/images/avatarimage.svg" alt="avatar">
                </div>
            </div>
            <div class="table--container">
                <div>
                    <h1>Settings</h1>
                </div>
                <div class="navbar-settings-form">
                    <div class="tab">
                        <div class="tab-inner">
                            <div class="tab-options">
                                <img src="uploads/images/profile.svg" alt="showprofile">
                                <button class="tablinks" onclick="openTab(event, 'Profile')">Profile Settings</button>
                            </div>
                            <div class="tab-options">
                                <img src="uploads/images/security_icon.svg" alt="showprofile">
                                <button class="tablinks" onclick="openTab(event, 'Security')">Security</button>
                            </div>
                            <div class="tab-options">
                                <img src="uploads/images/plug.svg" alt="showprofile">
                                <button class="tablinks" onclick="openTab(event, 'Connect')">Connect Website</button>
                            </div>
                            <div class="tab-options">
                                <img src="uploads/images/code_icon.svg" alt="showprofile">
                                <button class="tablinks" onclick="openTab(event, 'Token')">Get Token</button>
                            </div>
                        </div>
                    </div>
                      
                      <div id="Profile" class="tabcontent">
                        <form action="" method="post">
                            <div class="form-header">
                                <div class="form-header-content">
                                    <h2>Profile Settings</h2>
                                    <p>Edit basic information about you</p>
                                </div>
                            </div>
                            <div class="form-content">
                                <div class="form-image">
                                    <img src="uploads/images/sample_image.png" alt="your-image">
                                </div>
                                <div class="inp-grp-container">
                                    <div class="layer">
                                        <div class="inp-grp">
                                            <label for="firstname">Enter your First Name</label>
                                            <input type="text" placeholder="John" name="firstname" id="firstname">
                                        </div>
                                        <div class="inp-grp">
                                            <label for="lastname">Enter your Last Name</label>
                                            <input type="text" placeholder="John" name="lastname" id="lastname">
                                        </div>
                                    </div>
                                    <div class="layer">
                                        <div class="inp-grp">
                                            <label for="email">Email Address</label>
                                            <input type="email" placeholder="John@gmail" name="email" id="email">
                                        </div>
                                        <div class="inp-grp">
                                            <label for="phone-number">Phone number</label>
                                            <input type="number" placeholder="070680373937" name="phonenumber" id="phone-number">
                                        </div>
                                    </div>
                                    <div class="layer-last">
                                        <div class="inp-grp">
                                            <button type="button">Cancel</button>
                                        </div>
                                        <div class="inp-grp">
                                            <button name="save_changes" type="submit">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                       </div>
                      
                      <div id="Security" class="tabcontent">
                        <form action="" method="post">
                            <div class="form-header">
                                <div class="form-header-content">
                                    <h2>Security</h2>
                                    <p>Update your password</p>
                                </div>
                            </div>
                            <div class="form-content">
                                <div class="inp-grp-container">
                                    <div class="layer">
                                        <div class="inp-grp">
                                            <label for="c_password">Current Password</label>
                                            <input type="password" placeholder="John" name="c_password" id="c_password">
                                        </div>
                                        <div class="inp-grp">
                                        </div>
                                    </div>
                                    <div class="layer">
                                        <div class="inp-grp">
                                            <label for="n_password">New Password</label>
                                            <input type="password" placeholder="John@gmail" name="n_password" id="n_password">
                                        </div>
                                        <div class="inp-grp">
                                            <label for="con_password">Phone number</label>
                                            <input type="password" placeholder="070680373937" name="con_password" id="con_password">
                                        </div>
                                    </div>
                                    <div class="layer-last">
                                        <div class="inp-grp">
                                            <button type="button">Cancel</button>
                                        </div>
                                        <div class="inp-grp">
                                            <button name="update_password" type="submit">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                      </div>
                      
                      <div id="Connect" class="tabcontent">
                        <form action="" method="post">
                            <div class="form-header">
                                <div class="form-header-content">
                                    <h2>Connect Website</h2>
                                    <p>Add website to begin tracking</p>
                                </div>
                            </div>
                            <div class="form-content">
                                <div class="inp-grp-container">
                                    <div class="layer-last-website">
                                        <div class="inp-grp">
                                            <button id="myBtn" type="button">Add Website</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="list-websites">
                            <table class="table-wrapper">
                                <tbody class="table-body-settings">
                                    <tr class="table-body-row">
                                        <td class="table-data tab-index">1</td>
                                        <td class="table-data"> www.websiteone.com</td>
                                        <td class="table-data">
                                            <form action="" class="form-del" method="get">
                                                <button class="del-btn" type="submit">DELETE</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr class="table-body-row">
                                        <td class="table-data tab-index">2</td>
                                        <td class="table-data"> www.websiteone.com</td>
                                        <td class="table-data">
                                            <form action="" class="form-del" method="get">
                                                <button class="del-btn" type="submit">DELETE</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr class="table-body-row">
                                        <td class="table-data tab-index">3</td>
                                        <td class="table-data"> www.websiteone.com</td>
                                        <td class="table-data">
                                            <form action="" class="form-del" method="get">
                                                <button class="del-btn" type="submit">DELETE</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                      </div>

                      <div id="Token" class="tabcontent">
                        <form action="" method="post">
                            <div class="form-header">
                                <div class="form-header-content">
                                    <h2>Get Token</h2>
                                    <p>Add token to begin tracking</p>
                                </div>
                            </div>
                            <div class="form-content">
                                <div>
                                    <p>Copy this code and paste it on the header section of your website</p>
                                </div>
                                <div class="inp-grp-container">
                                    <div class="layer-last-website">

                                        <div class="token-wrapper">
                                            <div class="text-token">
                                                <p>KGFHKJDHFH8377643987!@#$#$JHBCB4</p>
                                            </div>
                                            <div class="inp-grp">
                                                <button type="button">Copy</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                      </div>
                </div>
                
                <?php require_once "partials/pagination.php"; ?>
            </div>
        </div>
    </div>
    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
        <div class="modal-header">
            <h2>Add Website</h2>
            <span class="close">&times;</span>
        </div>
        <div class="modal-body">
            <!-- <figure>
                <img src="uploads/images/author.svg" alt="author-avatar">
            </figure> -->
            <form action="" method="post">
                <div class="inp-grp">
                    <label for="weburl">Website Url</label>
                    <input type="text" name="weburl" placeholder="Enter url" id="weburl">
                </div>
                <div class="inp-grp">
                    <button name="add-website" class="web-btn" type="submit">Add Website</button>
                </div>
            </form>
        </div>
        
    </div>
    
    </div>
    <script src="/scripts/main.js" defer></script>
</body>
</html>