<!DOCTYPE html>
<html>
<head>
    <?$this->load->view('common/head')?>
    <title>Shopping-app - Home</title>
</head>
<body>
<?$this->load->view('boxes/header')?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <div class="marg2 pad03-04 background-green">
            <form action="/account" method="post">
                <div class="form-group">
                    <span for="name">Name</span>
                    <input type="text" class="form-control" name="name" id="name"
                           value="<?= set_value('name', $cliente->nombre)?>" placeholder="Name">
                </div>
                <div class="form-group">
                    <span for="surname">Surname</span>
                    <input type="text" class="form-control" name="surname" id="surname"
                           value="<?= set_value('surname', $cliente->apellido)?>" placeholder="Surname">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group right">
                            <a href="/category/select_categories" class="btn btn-default">Change preferences</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>