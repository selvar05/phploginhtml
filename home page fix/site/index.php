<?php
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */

$this->title = 'My  Application';
?>
<div class="site-index">
<p><strong>WELCOME
<?= Yii::$app->user->identity->username ?>!!!!!!</p></strong><br/>

<div class="site-index">
                    <h3 class="title text-center appr-heading">Your Approval Status</h3>
                    <div class="row bs-wizard" style="border-bottom:0;">
                           
                            <div class="col bs-wizard-step complete">
                              <div class="text-center bs-wizard-stepnum">Level 1</div>
                              <div class="progress"><div class="progress-bar"></div></div>
                              <span class="bs-wizard-dot"  data-placement="bottom" ></span>
                              <div class="bs-wizard-info text-center">
                                 
                                  <span class="title-txt"><span class="status complete">
                                        Level 1 Approved</span>
                                  </span>
                                  <table class="details">
                                  <tr><td>Status</td><td>:</td><td class="status complete">Completed</td></tr>
                                  <tr><td>Date</td><td>:</td><td>10/12/2018</td></tr>
                                  <tr><td>Comments</td><td>:</td><td>Approved.Nam mollis tristique erat vel tristique. Aliquam erat volutpat. </td></tr>
                              </table>
                            </div>
                            </div>
                            
                            <div class="col bs-wizard-step active"><!-- complete -->
                              <div class="text-center bs-wizard-stepnum">Level 2</div>
                              <div class="progress"><div class="progress-bar"></div></div>
                              <span class="bs-wizard-dot"  data-placement="bottom" ></span>
                              <div class="bs-wizard-info text-center"> 
                                    <span class="title-txt"><span class="status progressing">Level 2 Progressing</span>  </span>
                                <table class="details">
                                    <tr><td>Status</td><td>:</td><td class="status progressing">Progress</td></tr>
                                    <tr><td>Date</td><td>:</td><td>12/1/2019</td></tr>
                                    <tr><td>Comments</td><td>:</td><td>Verification Pending </td></tr>
                                </table>
                            </div>
                            </div>
                            
                            <div class="col bs-wizard-step"><!-- complete -->
                              <div class="text-center bs-wizard-stepnum">Level 3</div>
                              <div class="progress"><div class="progress-bar"></div></div>
                              <span class="bs-wizard-dot" data-placement="bottom"></span>
                              <div class="bs-wizard-info text-center">
                                    <span class="title-txt">Level 3 Pending</span>
                                    <table class="details">
                                        <tr><td>Staus</td><td>:<td> Waiting for Level 1 & Level 2 Approvals</td></tr> 
                                        </table>
            
                               </div>
                            </div>
                           
</div>
                            <div class="row">
                    <div class="col-md-6">
                            <div class="card bg-white">
                                    <div class="card-header card-bg">
                                            Welcome Selva !!!
                                    </div>
                                    <div class="card-body">
                                      <h5 class="card-title">Your Application Progress</h5>
                                      <div class="card-text">
                                          <div class="text-center">
                                              <div class="progress-graph">
                                            <input type="text" value="15" class="applicationstatusmap" data-width="150"  data-height="150" data-readOnly=true data-thickness=".4"
                                            data-fgColor="chartreuse">
                                        </div>
                                        <a href="index.php?r=userbasicdetailsmaster%2Fgetform" class="btn btn-primary">START APPLICATION</a>
                                            </div>
                                      </div>
                                    </div>
                                  </div>
                    </div>
                    <div class="col-md-6">
                            <div class="card bg-warning">
                                    <div class="card-header">
                                            Instructions :
                                    </div>
                                    <div class="card-body bg-warning-body">
                                    
                                      <p class="card-text">
                                           
                                            1.You should fill the following forms .<br />
                                            a)Personal details Form <br />
                                            b)Address Form<br />
                                            c)Education Form<br />
                                            d)Employment Form<br />
                                            e)Other Details Form<br />
                                            f)Document Form<br /><br />
                            
                                            2.Once all the forms are filled can proceed to the payment.<br /><br />
                            
                                            3. If you want to make any changes in the form, can be done through the 'Update'.<br /><br />
                                      </p>
                                    
                                 
                                    </div>
                                  </div>
                    </div>
                </div>
                          
                        </div>
</div>




  </div>

