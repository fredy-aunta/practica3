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
            <div class="marg02 pad03-04 background-green">
                <h2 class="center   ">Preferences</h2>
                <form action="/category/select_categories" method="post">
                    <?foreach($categories as $category):?>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="categories[]" value="<?= $category->id?>"
                                    <?= (in_array($category->id, $selected_categories)) ? 'checked="checked"': ''?>>
                                <?= $category->name?>
                            </label>
                        </div>
                    <?endforeach?>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>