<?php

//Test için verilerin gelip gelmediği kontrol edildi.
//print_r($todos);

//die();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List Uygulaması</title>

    <?php $this->load->view("includes/style.php"); ?>

</head>

<body>

    <h3 class="text-center">Todo List Uygulaması</h5>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url("todo/insert") ?>" method="POST">
                        <div class="row">
                            <div class="col-md-11">
                                <input name="todo_description" type="text" class="form-control" placeholder="Planladığınız işlemi giriniz..">
                            </div>
                            <div class="col-md-1">
                                <button class="btn btn-primary">Ekle </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <br>
            <div class="row">
                <table class="table table-bordered table-hover table-striped">

                    <thead>
                        <tr>
                            <td class="text-center">Yapılacaklar</td>
                            <td style="width: 100px;">Durum</td>
                            <td style="width: 100px;">İşlem</td>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($todos as $todo) { ?>

                            <tr>
                                <td><?php echo $todo->description; ?></td>
                                <td> <input 
                                type="checkbox" 
                                data-url="<?php echo base_url("todo/isComplatedSetter/$todo->id")?>"
                                class="form-control js-switch" <?php echo ($todo->complatedAt==1)? "checked": " " ?>></td>
                                <td><a href="<?php echo base_url("todo/delete/$todo->id") ?>" class="btn btn-danger"> Sil </a> </td>
                            </tr>

                        <?php } ?>


                    </tbody>


                </table>


            </div>
        </div>









        <?php $this->load->view("includes/script.php"); ?>

</body>

</html>