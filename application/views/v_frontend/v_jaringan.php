<!--========================= Content Wrapper ==============================-->
<div class="container">
 
    <div class="well">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Masukkan No Tiket</h3>
    </div>
     <form class="form-horizontal" method="post" action="<?=base_url()?>home/cari_jaringan">
        <div class="modal-body">
                    <div class="control-group">
                <label class="control-label">No Tiket</label>
                <div class="controls">
                    <input name="notiket" type="text" value="" placeholder="Masukkan No TIket" >
                </div>
            </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Cari</button>
        </div>

        </div>
    </form>
    </div>
 </div>



