<head>
    <title>Admin</title>
</head>

<?php
    include_once("php-partials/blocks/block-header/block-header.php");
?>

<div class="page-services">

    <div class="subhero">
        <!-- <div class="flowersbottom"></div> -->
        <div class="overlay"></div>
        <div class="page-title">
            <h1>Administrator</h1>
        </div>
    </div>

    <div class="page-content">

        <!-- if logged in -->
        <?php if (isset($_SESSION["id"])  || isset($_SESSION["username"])) { ?>

            <div class="subheader">
                <div class="logged-in">
                    <h3>Du er logget ind som</h3>
                    <h2><?php echo $_SESSION["username"]; ?></h2>
                </div>
            </div>
            
            <!-- include php blocks here -->
            <?php
                include("php-partials/admin-blocks/block-admin-list/block-admin-list.php");      
            ?>
        
        <?php } // if (isset($_SESSION["id"])) end

        // if not logged in
        else { ?>
            <div class="block no_session">
                <h1>Beklager!</h1>
                <h2>Du skal være logget ind for at se denne side.</h2>
            </div>
        <?php } ?>

    </div>

</div>


<?php
    include_once("php-partials/blocks/block-footer/block-footer.php");
?>