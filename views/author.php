<?php require "partials/header.php"; ?>
    
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
                <div class="table--container--header">
                    <h2 class="tabel-title">
                        Authors
                    </h2>
                    <button id="myBtn" class="btn btn-table">Add Author</button>
                </div>
                <table class="table-wrapper">
                    <thead class="table-header">
                        <tr class="table-header-row">
                            <td class="table-head-data"></td>
                            <td class="table-head-data">Author’s Details</td>
                            <td class="table-head-data">Email address</td>
                            <td class="table-head-data">Phone number</td>
                            <td class="table-head-data">No. of Posts</td>
                            <td class="table-head-data">Total Reach</td>
                        </tr>
                    </thead>
                    <tbody class="table-body">
                        <tr class="table-body-row">
                            <td class="table-data tab-index">1</td>
                            <td class="table-data"><span class="table-avatar"></span> <span class="table-data-name">Jenny Wilson</span> </td>
                            <td class="table-data">debra.holt@example.com</td>
                            <td class="table-data">070893935083</td>
                            <td class="table-data">120 Posts</td>
                            <td class="table-data">3.4k Reach</td>
                        </tr>
                        <tr class="table-body-row">
                            <td class="table-data tab-index">2</td>
                            <td class="table-data"><span class="table-avatar"></span> <span class="table-data-name">Jenny Wilson</span> </td>
                            <td class="table-data">debra.holt@example.com</td>
                            <td class="table-data">070893935083</td>
                            <td class="table-data">120 Posts</td>
                            <td class="table-data">3.4k Reach</td>
                        </tr>
                        <tr class="table-body-row">
                            <td class="table-data tab-index">3</td>
                            <td class="table-data"><span class="table-avatar"></span> <span class="table-data-name">Jenny Wilson</span> </td>
                            <td class="table-data">debra.holt@example.com</td>
                            <td class="table-data">070893935083</td>
                            <td class="table-data">120 Posts</td>
                            <td class="table-data">3.4k Reach</td>
                        </tr>
                        <tr class="table-body-row">
                            <td class="table-data tab-index">4</td>
                            <td class="table-data"><span class="table-avatar"></span> <span class="table-data-name">Jenny Wilson</span> </td>
                            <td class="table-data">debra.holt@example.com</td>
                            <td class="table-data">070893935083</td>
                            <td class="table-data">120 Posts</td>
                            <td class="table-data">3.4k Reach</td>
                        </tr>
                        <tr class="table-body-row">
                            <td class="table-data tab-index">5</td>
                            <td class="table-data"><span class="table-avatar"></span> <span class="table-data-name">Jenny Wilson</span> </td>
                            <td class="table-data">debra.holt@example.com</td>
                            <td class="table-data">070893935083</td>
                            <td class="table-data">120 Posts</td>
                            <td class="table-data">3.4k Reach</td>
                        </tr>
                        <tr class="table-body-row">
                            <td class="table-data tab-index">6</td>
                            <td class="table-data"><span class="table-avatar"></span> <span class="table-data-name">Jenny Wilson</span> </td>
                            <td class="table-data">debra.holt@example.com</td>
                            <td class="table-data">070893935083</td>
                            <td class="table-data">120 Posts</td>
                            <td class="table-data">3.4k Reach</td>
                        </tr>
                        <tr class="table-body-row">
                            <td class="table-data tab-index">7</td>
                            <td class="table-data"><span class="table-avatar"></span> <span class="table-data-name">Jenny Wilson</span> </td>
                            <td class="table-data">debra.holt@example.com</td>
                            <td class="table-data">070893935083</td>
                            <td class="table-data">120 Posts</td>
                            <td class="table-data">3.4k Reach</td>
                        </tr>
                        <tr class="table-body-row">
                            <td class="table-data tab-index">8</td>
                            <td class="table-data"><span class="table-avatar"></span> <span class="table-data-name">Jenny Wilson</span> </td>
                            <td class="table-data">debra.holt@example.com</td>
                            <td class="table-data">070893935083</td>
                            <td class="table-data">120 Posts</td>
                            <td class="table-data">3.4k Reach</td>
                        </tr>
                    </tbody>
                </table>
                
                <?php require_once "partials/pagination.php"; ?>
            </div>
        </div>
    </div>
    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h2>Add Author</h2>
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <figure>
                    <img src="uploads/images/author.svg" alt="author-avatar">
                </figure>
                <form action="" method="post">
                    <div class="inp-grp">
                        <label for="fullname">Full name</label>
                        <input type="text" name="fullname" placeholder="Full name" id="fullname">
                    </div>
                    <div class="inp-grp">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" placeholder="Email Address" id="email">
                    </div>
                    <div class="inp-grp">
                        <label for="phone-number">Phone number</label>
                        <input type="number" name="phoneNumber" placeholder="Phone Number" id="phone-number">
                    </div>
                    <div class="inp-grp">
                        <button name="add-author" class="auth-btn" type="submit">Add Author</button>
                    </div>
                </form>
            </div>
        </div>
    
    </div>
</body>
</html>