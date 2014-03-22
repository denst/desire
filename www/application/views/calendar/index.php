<link rel="stylesheet" href="/css/library/badger.css">
<div class="row">   
    <div class="col-md-9">
        <form class="form-inline" role="form" id="form-desire">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Desire</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Price</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Price</label>
            <div class="col-sm-10">
                <select class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    <div class="col-md-9">
       <? $key = 1;?>
       <? foreach ($month as $mon):?>
          <? if($key > 3) $key = 1;?>
          <? if($key == 1):?>
              <div class="row">
          <? endif;?>
            <div class="col-md-4">
                <div class="badger-left badger-success" data-badger="<?=$mon?>">
                    <? if(isset($month_content))
                      echo $month_content;
                    ?>
                </div>
            </div>
          <? if($key == 3):?>
              </div>
          <? endif;?>
          <? $key++;?>
        <? endforeach;?>
    </div>
    <div class="col-md-1">
        <? if(isset($receipt))
          echo $receipt;
        ?>
    </div>
</div>
