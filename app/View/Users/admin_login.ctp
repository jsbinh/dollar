<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            Trang quan ly
        </title>
        

        <?php
        echo $this->Html->css(array('/backend/css/bootstrap-cerulean', '/backend/css/charisma-app', '/backend/css/jquery-ui-1.8.21.custom', '/backend/css/general'));
        echo $this->Html->script(array('/backend/js/jquery-1.7.2.min', 'jquery-ui-1.8.21.custom.min', '/backend/js/bootstrap-dropdown', '/backend/js/jquery-1.8.2.min', '/backend/js/jquery_action', 'validation'));

        echo $this->fetch('css');
        echo $this->fetch('script');
        echo $this->Html->meta('icon');
        echo $this->fetch('meta');

        echo $this->Session->flash('email');
        ?>
        <script type='text/javascript'>
            $(document).ready(function() {
                setTimeout(function() {
                    $("#flashMessage").fadeOut().remove();
                }, 7000);
            });
        </script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row-fluid">

                <div class="row-fluid">
                    <div class="span12 center login-header">
                        <h2>Welcome to Forexpam manager</h2>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->

                <div class="row-fluid">
                    <div class="well span5 center login-box">
                        <div class="alert alert-info">Login</div>
                        <?php echo $this->Session->flash(); ?>
                        <?php echo $this->Form->create('User', array('div' => false, 'label' => false)); ?>
                        <fieldset>
                            <div class="input-prepend" title="Username" data-rel="tooltip">
                                <span class="add-on"><i class="icon-user"></i> </span>
                                <?php echo $this->Form->input('username', array('class' => 'input-large span10', 'type' => 'text', 'autofocus' => true, 'div' => false, 'label' => false)) ?>

                            </div>
                            <div class="clearfix"></div>
                            <div class="input-prepend" title="Password" data-rel="tooltip">
                                <span class="add-on"><i class="icon-lock"></i> </span>
                                <?php echo $this->Form->input('password', array('class' => 'input-large span10', 'type' => 'password', 'div' => false, 'label' => false)) ?>

                            </div>
                            <div class="clearfix"></div>
                            <p class="center span5">
                                <?php echo $this->Form->submit('Login', array('class' => 'btn btn-primary', 'div' => false, 'label' => false)); ?>
                            </p>
                        </fieldset>
                        <?php echo $this->Form->end(); ?>
                    </div>

                    <!--/span-->
                </div>
                <!--/row-->
            </div>
            <!--/fluid-row-->
        </div>
    </body>
</html>
