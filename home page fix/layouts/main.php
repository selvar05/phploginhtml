<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;
/*use app\assets\AppAsset;*/
use app\assets\BootAdminAsset;
use webvimark\modules\UserManagement\components\GhostMenu;
use webvimark\modules\UserManagement\UserManagementModule;
use app\assets\FontAsset;
/*AppAsset::register($this);*/
FontAsset::register($this);
BootAdminAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="bg-light">
<?php $this->beginBody() ?>

    <nav class="navbar navbar-expand navbar-dark bg-primary">
			<a class="sidebar-toggle mr-3" href="#"><i class="fa fa-bars"></i></a>
			<a class="navbar-brand" href="<?= Yii::$app->homeUrl; ?>"><?= Yii::$app->name; ?></a>

			<div class="navbar-collapse collapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<?php if(Yii::$app->user->isGuest) { ?>
								<?= Html::a('Login', ['/user-management/auth/login'], ['class' => 'nav-link']) ?>
						<?php } else { ?>
							<a href="#" id="dd_user" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-user"></i>
									<?= Yii::$app->user->identity->username; ?></a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd_user">
									<!-- <a href="#" class="dropdown-item">Profile</a> -->
											<?= Html::beginForm(['/site/logout'], 'post') ?>
											<?= Html::submitButton('Logout', ['class' => 'dropdown-item']) ?>
											<?= Html::endForm() ?>
								</div>
							<?php } ?>
					</li>
				</ul>
			</div>
    </nav>
    <?php
    /*NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
            'class' => 'navbar navbar-expand navbar-dark bg-primary',
        ],

    ]);*/
    /*echo Nav::widget([
        /*'options' => ['class' => 'navbar-nav navbar-right'],*/
        /*'options' => ['class' => 'navbar-nav ml-auto'],
        'items' => [
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);*/
    /*NavBar::end();*/
    ?>

    <!-- <div class="container"> -->
    <div class="d-flex">
			<?php /*<?= Breadcrumbs::widget([
					'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
			]) ?> */ ?>


			<div class="sidebar sidebar-dark bg-dark">
			<div class="stepwizard">
				<?php
					echo GhostMenu::widget([
							'options' => ['class' => 'stepwizard-row-ul'],
							'encodeLabels'=>false,
							'activateParents'=>true,
							'items' => [
									['label' => 'Search Forms', 'url' => ['/searchform/index']],
									['label' => 'Application Status', 'url' => ['/applicationstatus/index']],
									['label' => 'Enrollment Search', 'url' => ['/enrollment-master/index']],
									['label' => 'Enrollment Form', 'url' => ['/enrollment-master/getform']],
									['label' => 'Personal Form', 'url' => ['/userbasicdetailsmaster/getform']],
									['label' => 'Address Form', 'url' => ['/addressform/getform']],
									['label' => 'Education Form', 'url' => ['/userschool/getform'],
									'items' => [
							            ['label' => 'School Form', 'url' => ['/userschool/getform'],'options' => ['class' => 'list-unstyled '],],
							            ['label' => 'College Form', 'url' => ['/userscollege/getform'],'options' => ['class' => 'list-unstyled '],],
							            ['label' => 'LawCollege Form', 'url' => ['/userlawcollege/getform'],'options' => ['class' => 'list-unstyled '],],
						        	]],
									['label' => 'Employment Form', 'url' => ['/employmentform/getform']],
									['label' => 'Other Information Form', 'url' => ['/userotherinformation/getform']],
									['label' => 'Document Form', 'url' => ['/user-document/getform']],
									['label' => 'Payment Form', 'url' => ['/user-fee-master/getform']],
							],
						]);

						echo GhostMenu::widget([
							'options' => ['class' => 'list-unstyled'],
							'encodeLabels'=>false,
							'activateParents'=>true,
							'items'=>UserManagementModule::menuItems()
						]);
					?>
					</div>
			</div>
			<div class="content p-4">
				<?= Alert::widget() ?>
			<!--	<div class="text-center mb-4"></div> --> <!-- removed to avoid extra margin ? don't know why this is required -->
				<?= $content ?>
			</div>
    </div>

<footer class="footer">
	<div class="container">
		<p class="pull-left">&copy; My Company <?= date('Y') ?></p>

		<?php /* <p class="pull-right"><?= Yii::powered() ?></p> */ ?>
	</div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
