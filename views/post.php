<?php require "partials/header.php" ?>

<div class="table--container">
    <div class="dashboard-user">
        <div class="post-back-link">
            <a href="/settings"><img src="uploads/images/backarrow.svg" alt="back"> <span>Go back</span> </a>
        </div>
        <div class="post-dashboard-user-name">
            <h2>Jenny Wilson</h2>
            <p>Jenny Wilson's Post</p>
        </div>
    </div>
    <div class="post-table--container--header">
        <div class="post-search-bar">
            <form action="" method="get">
                <input type="search" class="search--area" placeholder="Search for posts">
            </form>
        </div>

        <div class="post-filter-options">
            <span class="select-filter-label" for="filter-query">Filter By:</span>
            
            <div class="custom-select">
                <form action="" method="post">
                    <select name="filter-query" id="filter-query">
                        <option value="">Select Filter</option>
                        <option value="post-title">Post Title</option>
                        <option value="no-of-views">No of views</option>
                        <option value="no-of-shares">No of Shares</option>
                    </select>
                </form>
            </div>
        </div>

    </div>
    <table class="table-wrapper">
        <thead class="table-header">
            <tr class="table-header-row">
                <td class="table-head-data"></td>
                <td class="table-head-data">Post Title</td>
                <td class="table-head-data">Date Posted</td>
                <td class="table-head-data">No. of View</td>
                <td class="table-head-data">No. of Shares</td>
            </tr>
        </thead>
        <tbody class="table-body">
            <tr class="table-body-row">
                <td class="table-data tab-index">1</td>
                <td class="table-data"> I LEND MY VOICE: #EndSARS, #EndPoliceIntimidation <br/> #EndPoliceBrutality</td>
                <td class="table-data">October 17, 2020</td>
                <td class="table-data">120 Views</td>
                <td class="table-data">20 Shares</td>
            </tr>
            <tr class="table-body-row">
                <td class="table-data tab-index">2</td>
                <td class="table-data"> I LEND MY VOICE: #EndSARS, #EndPoliceIntimidation <br/> #EndPoliceBrutality</td>
                <td class="table-data">October 17, 2020</td>
                <td class="table-data">120 Views</td>
                <td class="table-data">20 Shares</td>
            </tr>
            <tr class="table-body-row">
                <td class="table-data tab-index">3</td>
                <td class="table-data"> I LEND MY VOICE: #EndSARS, #EndPoliceIntimidation <br/> #EndPoliceBrutality</td>
                <td class="table-data">October 17, 2020</td>
                <td class="table-data">120 Views</td>
                <td class="table-data">20 Shares</td>
            </tr>
            <tr class="table-body-row">
                <td class="table-data tab-index">4</td>
                <td class="table-data"> I LEND MY VOICE: #EndSARS, #EndPoliceIntimidation <br/> #EndPoliceBrutality</td>
                <td class="table-data">October 17, 2020</td>
                <td class="table-data">120 Views</td>
                <td class="table-data">20 Shares</td>
            </tr>
            <tr class="table-body-row">
                <td class="table-data tab-index">5</td>
                <td class="table-data"> I LEND MY VOICE: #EndSARS, #EndPoliceIntimidation <br/> #EndPoliceBrutality</td>
                <td class="table-data">October 17, 2020</td>
                <td class="table-data">120 Views</td>
                <td class="table-data">20 Shares</td>
            </tr>
            <tr class="table-body-row">
                <td class="table-data tab-index">6</td>
                <td class="table-data"> I LEND MY VOICE: #EndSARS, #EndPoliceIntimidation <br/> #EndPoliceBrutality</td>
                <td class="table-data">October 17, 2020</td>
                <td class="table-data">120 Views</td>
                <td class="table-data">20 Shares</td>
            </tr>
            <tr class="table-body-row">
                <td class="table-data tab-index">7</td>
                <td class="table-data"> I LEND MY VOICE: #EndSARS, #EndPoliceIntimidation <br/> #EndPoliceBrutality</td>
                <td class="table-data">October 17, 2020</td>
                <td class="table-data">120 Views</td>
                <td class="table-data">20 Shares</td>
            </tr>
            <tr class="table-body-row">
                <td class="table-data tab-index">8</td>
                <td class="table-data"> I LEND MY VOICE: #EndSARS, #EndPoliceIntimidation <br/> #EndPoliceBrutality</td>
                <td class="table-data">October 17, 2020</td>
                <td class="table-data">120 Views</td>
                <td class="table-data">20 Shares</td>
            </tr>
        </tbody>
    </table>
    
    <?php require "partials/pagination.php" ?>
</div>
</div>
</div>
    
</body>
</html>