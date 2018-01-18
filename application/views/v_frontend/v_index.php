<!--================ Content Wrapper===========================================-->
<br>
<br>
<br><center>
<table  border="0"> 
    <thead>
    <tr><center>

                <th class="span3">
            <a href="<?php echo base_url('home/jaringan')?>" class="btn btn-mini btn-block btn btn-inverse" ></i> <h3>Jaringan </h3>
                <img src="<?php echo base_url('asset_frontend/projects_but.png')?>" alt="">
            </a>
            <th/><th/>
            <th class="span3">
             <a href="<?php echo base_url('home/lpse')?>" class="btn btn-mini btn-block btn btn-inverse" ></i> <h3>LPSE </h3>
                <img src="<?php echo base_url('asset_frontend/lpsee.png')?>" alt="">
            </a>
        </center>
    </tr>
    </thead>
    <tbody>
    </tbody>
</table>
</center>

<div id="Jaringan" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        </div>
    </form>
</div>
<div id="Lpse" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Masukkan No Tiket</h3>
    </div>
    <form class="form-horizontal" method="post" action="<?=base_url()?>crud/create">
        <div class="modal-body">
                    <div class="control-group">
                <label class="control-label">No Tiket</label>
                <div class="controls">
                    <input name="nim" type="text" value="" placeholder="Masukkan No TIket" >
                </div>
            </div>

        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        </div>
    </form>
</div>


