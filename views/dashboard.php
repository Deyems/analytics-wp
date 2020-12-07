<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="/css/scss/main.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="/scripts/dashboard.js" defer></script>
</head>
<body>
    <div class="d-flex">
        <div class="dashboard-sidebar">
            <div class="menu">
                <span class="logo-white">
                    
                </span>
                <span class="menu-item active-one">
                    <a class="" href="dashboard.html">
                        <img src="/uploads/images/home.svg" alt="dashboard">
                    </a>
                </span>
                <span class="menu-item">
                    <a href="home.html">
                        <img src="/uploads/images/people.svg" alt="author">
                    </a>
                </span>
                <span class="menu-item">
                    <a href="settings.html">
                        <img src="/uploads/images/settings.svg" alt="settings">
                    </a>
                </span>
            </div>
            <div class="signout">
                <span class="signout-item">
                    <a href="/">
                        <img class="signout-item-img" src="/uploads/images/arrowbar.svg" alt="arrow">
                        <img class="signout-item-img" src="/uploads/images/arrowicon.svg" alt="bar">
                    </a>
                </span>
            </div>
        </div>
        <div class="dashboard--authors">
            <div class="searchbar">
                <div>
                    <form action="" method="get">
                        <input type="search" class="search--area" placeholder="Search for author">
                    </form>
                </div>
                <div>
                    <img src="/uploads/images/avatarimage.svg" alt="avatar">
                </div>
            </div>
            <div class="table--container">
                <div class="table--container--header">
                    <h2 class="table-title">
                        Dashboard
                    </h2>
                </div>

                <div class="graph-container">

                    <section class="left-side-dash">
                        <div class="author-share">
                            <div class="top-authors">
                                <!-- <div class="author-labels">
                                    <p>Top Authors</p>
                                    <p>Last 6 months 
                                        <span>
                                            <img src="/uploads/images/dropdown.svg" alt="">
                                        </span>
                                    </p>
                                </div> -->
                                <div>
                                    <img class="graph-asset" src="/uploads/images/barchart.svg" alt="top authors chart">
                                </div>
                                <!-- <canvas id="myChart">Your browser doesn't support canvas</canvas> -->
                            </div>
                            <div class="sharing-channel">
                                <!-- <div class="author-labels">
                                    <p>Sharing Channel</p>
                                    <p>Last 6 months
                                        <span>
                                            <img src="/uploads/images/dropdown.svg" alt="">
                                        </span>
                                    </p>
                                </div> -->
                                <div>
                                    <img class="graph-asset" src="/uploads/images/piechart.svg" alt="sharing channel">
                                </div>
                                <!-- <canvas id="myChart2">Your browser doesn't support canvas</canvas> -->
                            </div>
                        </div>
                       
                        <div class="sh-auth-top-psts">
                            <div class="shared-authors">
                                <div class="authors-list">
                                    <h3>Top Shared Author</h3>
                                    <!-- <div><img src="/uploads/images/forwardarrow.svg" alt="next"></div> -->
                                </div>
                                <div class="load-shared-authors">
                                    <section>
                                        <div class="serial">1</div>
                                        <div class="roader-details">
                                            <table class="author-post-list">
                                                <tbody>
                                                    <tr class="author-row-list">
                                                        <td class="author-row-td">
                                                            <img src="uploads/images/sample_image.png" alt="avatar">
                                                        </td>
                                                        <td class="author-row-td">Jenny Wilson</td>
                                                        <td class="author-row-td">3.4K shares</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
        
                                    <section>
                                        <div></div>
                                        <div></div>
                                    </section>
        
                                    <section>
                                        <div class="serial">2</div>
                                        <div class="roader-details">
                                            <table class="author-post-list">
                                                <tbody>
                                                    <tr class="author-row-list">
                                                        <td class="author-row-td">
                                                            <img src="uploads/images/sample_image.png" alt="avatar">
                                                        </td>
                                                        <td class="author-row-td">Jenny Wilson</td>
                                                        <td class="author-row-td">3.4K shares</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
        
                                    <section>
                                        <div></div>
                                        <div></div>
                                    </section>
        
                                    <section>
                                        <div class="serial">3</div>
                                        <div class="roader-details">
                                            <table class="author-post-list">
                                                <tbody>
                                                    <tr class="author-row-list">
                                                        <td class="author-row-td">
                                                            <img src="uploads/images/sample_image.png" alt="avatar">
                                                        </td>
                                                        <td class="author-row-td">Jenny Wilson</td>
                                                        <td class="author-row-td">3.4K shares</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
        
                                    <section>
                                        <div></div>
                                        <div></div>
                                    </section>
        
                                    <section>
                                        <div class="serial">4</div>
                                        <div class="roader-details">
                                            <table class="author-post-list">
                                                <tbody>
                                                    <tr class="author-row-list">
                                                        <td class="author-row-td">
                                                            <img src="uploads/images/sample_image.png" alt="avatar">
                                                        </td>
                                                        <td class="author-row-td">Jenny Wilson</td>
                                                        <td class="author-row-td">3.4K shares</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
        
                                    <section>
                                        <div></div>
                                        <div></div>
                                    </section>
        
                                    <section>
                                        <div class="serial">5</div>
                                        <div class="roader-details">
                                            <table class="author-post-list">
                                                <tbody>
                                                    <tr class="author-row-list">
                                                        <td class="author-row-td">
                                                            <img src="uploads/images/sample_image.png" alt="avatar">
                                                        </td>
                                                        <td class="author-row-td">Jenny Wilson</td>
                                                        <td class="author-row-td">3.4K shares</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
        
                                    <section>
                                        <div></div>
                                        <div></div>
                                    </section>
        
                                </div>
                            </div>
        
                            <div class="top-post">
                                <div class="authors-list">
                                    <h3>Top Post</h3>
                                </div>
                                <div class="load-top-posts">
                                    <section>
                                        <div class="serial">1</div>
                                        <div class="roader-details">
                                            <table class="author-post-list">
                                                <tbody>
                                                    <tr class="author-row-list">
                                                        <td class="author-row-td">
                                                            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                                                        </td>
                                                        <td class="author-row-td">
                                                            <img src="uploads/images/sample_image.png" alt="avatar">
                                                        </td>
                                                        <td class="author-row-td">Jenny Wilson</td>
                                                        <td class="author-row-td">3.4K shares</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
        
                                    <section>
                                        <div></div>
                                        <div></div>
                                    </section>
                                    
                                    <section>
                                        <div class="serial">2</div>
                                        <div class="roader-details">
                                            <table class="author-post-list">
                                                <tbody>
                                                    <tr class="author-row-list">
                                                        <td class="author-row-td">
                                                            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                                                        </td>
                                                        <td class="author-row-td">
                                                            <img src="uploads/images/sample_image.png" alt="avatar">
                                                        </td>
                                                        <td class="author-row-td">Jenny Wilson</td>
                                                        <td class="author-row-td">3.4K shares</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
        
                                    <section>
                                        <div></div>
                                        <div></div>
                                    </section>
        
                                    <section>
                                        <div class="serial">3</div>
                                        <div class="roader-details">
                                            <table class="author-post-list">
                                                <tbody>
                                                    <tr class="author-row-list">
                                                        <td class="author-row-td">
                                                            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                                                        </td>
                                                        <td class="author-row-td">
                                                            <img src="uploads/images/sample_image.png" alt="avatar">
                                                        </td>
                                                        <td class="author-row-td">Jenny Wilson</td>
                                                        <td class="author-row-td">3.4K shares</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
        
                                    <section>
                                        <div></div>
                                        <div></div>
                                    </section>
        
                                    <section>
                                        <div class="serial">4</div>
                                        <div class="roader-details">
                                            <table class="author-post-list">
                                                <tbody>
                                                    <tr class="author-row-list">
                                                        <td class="author-row-td">
                                                            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                                                        </td>
                                                        <td class="author-row-td">
                                                            <img src="uploads/images/sample_image.png" alt="avatar">
                                                        </td>
                                                        <td class="author-row-td">Jenny Wilson</td>
                                                        <td class="author-row-td">3.4K shares</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
        
                                    <section>
                                        <div></div>
                                        <div></div>
                                    </section>
        
                                    <section>
                                        <div class="serial">5</div>
                                        <div class="roader-details">
                                            <table class="author-post-list">
                                                <tbody>
                                                    <tr class="author-row-list">
                                                        <td class="author-row-td">
                                                            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                                                        </td>
                                                        <td class="author-row-td">
                                                            <img src="uploads/images/sample_image.png" alt="avatar">
                                                        </td>
                                                        <td class="author-row-td">Jenny Wilson</td>
                                                        <td class="author-row-td">3.4K shares</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
        
                                    <section>
                                        <div></div>
                                        <div></div>
                                    </section>
        
                                    
                                </div>
        
                            </div>
                        </div>
    
                    </section>

                    <section class="second-part-dash">
                        <div class="authors">
                            <div class="authors-list">
                                <h3>Authors</h3>
                                <div><img src="/uploads/images/forwardarrow.svg" alt="next"></div>
                            </div>
                            <div class="load-authors">
                                <section>
                                    <div class="serial">1</div>
                                    <div class="roader-details">
                                        <table class="author-post-list">
                                            <tbody>
                                                <tr class="author-row-list">
                                                    <td class="author-row-td">
                                                        <img src="uploads/images/sample_image.png" alt="avatar">
                                                    </td>
                                                    <td class="author-row-td">Jenny Wilson</td>
                                                    <td class="author-row-td">120 posts</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                                
                                <section>
                                    <div></div>
                                    <div>
                                        <table class="author-post-list-lower">
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td class="author-email">jennywilson@gmail.com</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
    
                                <section>
                                    <div class="serial">2</div>
                                    <div class="roader-details">
                                        <table class="author-post-list">
                                            <tbody>
                                                <tr class="author-row-list">
                                                    <td class="author-row-td">
                                                        <img src="uploads/images/sample_image.png" alt="avatar">
                                                    </td>
                                                    <td class="author-row-td">Jenny Wilson</td>
                                                    <td class="author-row-td">120 posts</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                                
                                <section>
                                    <div></div>
                                    <div>
                                        <table class="author-post-list-lower">
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td class="author-email">jennywilson@gmail.com</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
    
                                <section>
                                    <div class="serial">2</div>
                                    <div class="roader-details">
                                        <table class="author-post-list">
                                            <tbody>
                                                <tr class="author-row-list">
                                                    <td class="author-row-td">
                                                        <img src="uploads/images/sample_image.png" alt="avatar">
                                                    </td>
                                                    <td class="author-row-td">Jenny Wilson</td>
                                                    <td class="author-row-td">120 posts</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                                
                                <section>
                                    <div></div>
                                    <div>
                                        <table class="author-post-list-lower">
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td class="author-email">jennywilson@gmail.com</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
    
                                <section>
                                    <div class="serial">2</div>
                                    <div class="roader-details">
                                        <table class="author-post-list">
                                            <tbody>
                                                <tr class="author-row-list">
                                                    <td class="author-row-td">
                                                        <img src="uploads/images/sample_image.png" alt="avatar">
                                                    </td>
                                                    <td class="author-row-td">Jenny Wilson</td>
                                                    <td class="author-row-td">120 posts</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                                
                                <section>
                                    <div></div>
                                    <div>
                                        <table class="author-post-list-lower">
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td class="author-email">jennywilson@gmail.com</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
    
                                <section>
                                    <div class="serial">1</div>
                                    <div class="roader-details">
                                        <table class="author-post-list">
                                            <tbody>
                                                <tr class="author-row-list">
                                                    <td class="author-row-td">
                                                        <img src="uploads/images/sample_image.png" alt="avatar">
                                                    </td>
                                                    <td class="author-row-td">Jenny Wilson</td>
                                                    <td class="author-row-td">120 posts</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                                
                                <section>
                                    <div></div>
                                    <div>
                                        <table class="author-post-list-lower">
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td class="author-email">jennywilson@gmail.com</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
    
    
                                <section>
                                    <div class="serial">2</div>
                                    <div class="roader-details">
                                        <table class="author-post-list">
                                            <tbody>
                                                <tr class="author-row-list">
                                                    <td class="author-row-td">
                                                        <img src="uploads/images/sample_image.png" alt="avatar">
                                                    </td>
                                                    <td class="author-row-td">Jenny Wilson</td>
                                                    <td class="author-row-td">120 posts</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                                
                                <section>
                                    <div></div>
                                    <div>
                                        <table class="author-post-list-lower">
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td class="author-email">jennywilson@gmail.com</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
    
    
                                <section>
                                    <div class="serial">3</div>
                                    <div class="roader-details">
                                        <table class="author-post-list">
                                            <tbody>
                                                <tr class="author-row-list">
                                                    <td class="author-row-td">
                                                        <img src="uploads/images/sample_image.png" alt="avatar">
                                                    </td>
                                                    <td class="author-row-td">Jenny Wilson</td>
                                                    <td class="author-row-td">120 posts</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                                
                                <section>
                                    <div></div>
                                    <div>
                                        <table class="author-post-list-lower">
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td class="author-email">jennywilson@gmail.com</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
    
    
                                <section>
                                    <div class="serial">4</div>
                                    <div class="roader-details">
                                        <table class="author-post-list">
                                            <tbody>
                                                <tr class="author-row-list">
                                                    <td class="author-row-td">
                                                        <img src="uploads/images/sample_image.png" alt="avatar">
                                                    </td>
                                                    <td class="author-row-td">Jenny Wilson</td>
                                                    <td class="author-row-td">120 posts</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                                
                                <section>
                                    <div></div>
                                    <div>
                                        <table class="author-post-list-lower">
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td class="author-email">jennywilson@gmail.com</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
    
    
                                <section>
                                    <div class="serial">5</div>
                                    <div class="roader-details">
                                        <table class="author-post-list">
                                            <tbody>
                                                <tr class="author-row-list">
                                                    <td class="author-row-td">
                                                        <img src="uploads/images/sample_image.png" alt="avatar">
                                                    </td>
                                                    <td class="author-row-td">Jenny Wilson</td>
                                                    <td class="author-row-td">120 posts</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                                
                                <section>
                                    <div></div>
                                    <div>
                                        <table class="author-post-list-lower">
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td class="author-email">jennywilson@gmail.com</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </section>
                </div>
                
            </div>
        </div>
    </div>
    
</body>
</html>