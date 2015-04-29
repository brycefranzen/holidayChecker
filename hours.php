<?php
date_default_timezone_set("America/Los_Angeles");

if(!$_SESSION){
   session_start();
}

$page = "adminHours";
    
if (!$_SESSION['is_logged_in'] == 1 ){
        // not logged in move to login page
        header('Location: /coupons/adminLogin.php');
        exit;
    }?>

<!DOCTYPE HTML>
<html lang="en">
    <head><!--HOME-->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/faviconIcon.php'; ?>
    <title>Edit Daily Specials |The Pit Crew Automotive</title>
    <meta charset="UTF-8" />
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/script.php'; ?>
    </head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/adminHeader.php'; ?>
    <div id="maincontent">
        <div class="container">
           <?php echo $errors ?>
            <div class='row'>
                    <h2>Daily Hours</h2><br>
                    <form action="index.php" method="post" name="shopHours" id="shopHours" novalidate>
                    <div class="control-group form-group col-lg-1">
                        <div class="controls">
                            <label>Monday</label>
                            <input type="text" class="form-control" name="monday" value="<?php echo $monday; ?>" id="monday">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group col-lg-1">
                        <div class="controls">
                            <label>Tuesday</label>
                            <input type="text" class="form-control" name="tuesday" value="<?php echo $tuesday; ?>" id="tuesday">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group col-lg-1">
                        <div class="controls">
                            <label>Wednesday</label>
                            <input type="text" class="form-control" name="wednesday" value="<?php echo $wednesday; ?>" id="wednesday">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group col-lg-1">
                        <div class="controls">
                            <label>Thursday</label>
                            <input type="text" class="form-control" name="thursday" value="<?php echo $thursday; ?>" id="thursday">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group col-lg-1">
                        <div class="controls">
                            <label>Friday</label>
                            <input type="text" class="form-control" name="friday" value="<?php echo $friday; ?>" id="friday">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group col-lg-1">
                        <div class="controls">
                            <label>Saturday</label>
                            <input type="text" class="form-control" name="saturday" value="<?php echo $saturday; ?>" id="saturday">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group col-lg-1">
                        <div class="controls">
                            <label>Sunday</label>
                            <input type="text" class="form-control" name="sunday" value="<?php echo $sunday; ?>" id="sunday">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group col-lg-1">
                        <div class="controls">
                            <button type="submit" name="action" value="updateDailyHours" class="btn btn-success" style="margin-top: 22px;">Update Daily Hours</button>
                            <div id="success" style="clear: both;"></div>
                        </div>
                    </div>
                    </form>
                    
            </div><!--row-->
            <div class="row">
                <hr />
                <h2>Holiday's</h2><br>
                <form action="index.php" method="post" name="shopHours" id="shopHours" novalidate>
                    <div class="row">
                        <div class="control-group form-group col-lg-2">
                            <div class="controls">
                                <label>New Years Day</label>
                                <input type="text" class="form-control" name="NewYearsDay" value="<?php echo $NewYearsDay; ?>" id="NewYearsDay">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group col-lg-2">
                            <div class="controls">
                                <label>President's Day</label>
                                <input type="text" class="form-control" name="PresidentsDay" value="<?php echo $PresidentsDay; ?>" id="PresidentsDay">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group col-lg-2">
                            <div class="controls">
                                <label>Memorial Day</label>
                                <input type="text" class="form-control" name="MemorialDay" value="<?php echo $MemorialDay; ?>" id="MemorialDay">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group col-lg-2">
                            <div class="controls">
                                <label>Independence Day</label>
                                <input type="text" class="form-control" name="IndependenceDay" value="<?php echo $IndependenceDay; ?>" id="IndependenceDay">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group col-lg-2">
                            <div class="controls">
                                <label>Labor Day</label>
                                <input type="text" class="form-control" name="LaborDay" value="<?php echo $LaborDay; ?>" id="LaborDay">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group col-lg-2">
                            <div class="controls">
                                <label>Halloween</label>
                                <input type="text" class="form-control" name="Halloween" value="<?php echo $Halloween; ?>" id="Halloween">
                                <p class="help-block"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="control-group form-group col-lg-2">
                            <div class="controls">
                                <label>Thanksgiving</label>
                                <input type="text" class="form-control" name="Thanksgiving" value="<?php echo $Thanksgiving; ?>" id="Thanksgiving">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group col-lg-2">
                            <div class="controls">
                                <label>Black Friday</label>
                                <input type="text" class="form-control" name="BlackFriday" value="<?php echo $BlackFriday; ?>" id="BlackFriday">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group col-lg-2">
                            <div class="controls">
                                <label>Christmas Eve</label>
                                <input type="text" class="form-control" name="ChristmasEve" value="<?php echo $ChristmasEve; ?>" id="ChristmasEve">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group col-lg-2">
                            <div class="controls">
                                <label>Christmas</label>
                                <input type="text" class="form-control" name="Christmas" value="<?php echo $Christmas; ?>" id="Christmas">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group col-lg-2">
                            <div class="controls">
                                <label>New Year's Eve</label>
                                <input type="text" class="form-control" name="NewYearsEve" value="<?php echo $NewYearsEve; ?>" id="NewYearsEve">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group col-lg-2">
                            <div class="controls">
                                <button type="submit" name="action" value="updateHolidayHours" class="btn btn-success" style="margin-top: 22px; width: 100%;">Update Holiday Hours</button>
                                <div id="success" style="clear: both;"></div>
                            </div>
                        </div>
                    </div>
                </form>                
            </div>
        </div>
    </div> <!--main content-->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
    
</body>
<?php   
    unset($_SESSION['errors']);
    unset($_SESSION['message']);
?>
</html>