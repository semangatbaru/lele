<!DOCTYPE html >
<html lang="en">
<head>
<title>Kategori | JHP</title>
  <?php $this->load->view('_partials/head')?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

   <header class="main-header">
    <?php $this->load->view('_partials/header'); ?>
    
  </header> 
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
   <?php $this->load->view('_partials/sidebar'); ?>
    <!-- /.sidebar -->
  </aside>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-10 col-sm-offset-1"   >
          
          <!-- /.box -->
          <!-- form tambah -->
          
          <div class="box box-info formtambah" >
                <div class="box-header with-border">
                  <center><h3 class="box-title">Tambah kategori</h3></center>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool click-hide" type="button" ><i class="fa fa-remove"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" class="form-horizontal" method="post" id="formnya" >
                  <div class="box-body">
                    
                    <div class="form-group">
                      <label  class="col-sm-2 control-label">ID Kategori</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control" id="id_kategori_add" name="id_kategori_add" placeholder="ID Kategori">
                      </div>
                    </div>

                    <div class="form-group">
                      <label  class="col-sm-2 control-label">Nama kategori</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control aturan" id="nama_kategori"  name="nama_kategori" placeholder="Nama Kategori">
                        <p id="msgnama_kategori"></p>
                      </div>
                    </div>

                    <div class="form-group">
                      <label  class="col-sm-2 control-label">Deskripsi</label>
                      <div class="col-sm-8">
                      <textarea class="form-control <?php echo form_error('deskripsi_kategori') ? 'is-invalid':'' ?>"
                              name="deskripsi_kategori" id="deskripsi_kategori" placeholder="Deskripsi"></textarea>
                       </div>
                    </div>


                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-default click-hide" >Batal</button>
                    <button type="submit" class="btn btn-success pull-right" name="simpan" id="click-simpan">Simpan</button>
                  </div>
                </form>
                  <!-- /.box-footer -->
          </div>

          <!-- form edit -->
           <!-- MODAL EDIT -->
           <form enctype="multipart/form-data" method="post" id="formnya2">
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Id kategori</label>
                            <div class="col-md-10">
                              <input type="text" name="id_kategori" id="id_kategori" class="form-control" placeholder="Id kategori" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Nama Kategori</label>
                            <div class="col-md-10">
                              <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" placeholder="Nama kategori">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Deskripsi</label>
                            <div class="col-md-10">
                              <textarea type="text" name="deskripsi_kategori" id="deskripsi_kategori" class="form-control" placeholder="Deskripsi"></textarea>
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        <!--END MODAL EDIT-->
          <!-- form table -->
          <div class="box ">
            <div class="box-header">
              <button class="btn btn-info click-tambah"><li class="fa fa-plus"></li> Tambah</button>
              <br><br>
              <h3 class="box-title">Data Kategori</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table  table-striped" >
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID Kategori</th>
                  <th>Nama Kategori</th>
                  <th>Deskripsi kategori</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody id="showData">

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!--MODAL DELETE-->
          <form>
            <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Apakah anda yakin menghapus data?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="id_kategori_delete" id="id_kategori_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        <!--END MODAL DELETE-->
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <?php //$this->load->view('_partials/aside');?>
</div>
<!-- ./wrapper -->

<?php $this->load->view('_partials/script');?>
<script type="text/javascript">
  $(document).ready(function(e){
    $(".formtambah").fadeOut();
    $(".formedit").fadeOut();
    
    $("#Msgnama_kategori").hide();
    $(".click-tambah").click(function(e){
      e.preventDefault()
      $(".formtambah").fadeIn(1000);
      kosong();
    })
    $(".click-hide").click(function(e){
      e.preventDefault()
      $(".formtambah").fadeOut(1000);
      
      kosong();
    })
    $(".click-hide").click(function(e){
      e.preventDefault()
      $(".formedit").fadeOut(1000);
      
      kosong();
    })
    
    setCode();

    //set Kode Otomatis
    function setCode(){
      var id_kategori = $('#id_kategori_add').val();
      $.ajax({
          type: "POST",
          url: "<?php echo site_url('Kategori/setCode') ?>",
          dataType: "JSON",
          data:{id_kategori:id_kategori},
          success : function(data){
              $('[name="id_kategori_add"]').val(data);
          }
      });
      return false;
    }

    //crud

    showRecord(); //munculkan data
    
    
    //function showdata
    function showRecord(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo site_url('Kategori/getAll')?>',
        async: true,
        dataType: 'JSON',
        success: function(data){
          var html = '';
          var i; 
          for(i=0; i<data.length; i++){
            html += '<tr>'+
                      '<td>'+(i+1)+'</td>'+
                      '<td>'+data[i].id_kategori+'</td>'+
                      '<td>'+data[i].nama_kategori+'</td>'+
                       '<td>'+data[i].deskripsi_kategori+'</td>'+
                      '<td style="text-align:right;">'+
                        '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id_kategori="'+data[i].id_kategori+'" data-nama_kategori="'+data[i].nama_kategori+'" data-deskripsi_kategori="'+data[i].deskripsi_kategori+'">Edit</a>'+' '+
                        '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id_kategori="'+data[i].id_kategori+'">Delete</a>'+
                      '</td>'+
                    '</tr>';
                }
          $('#showData').html(html);
          $('#example1').dataTable()
        }
      });
    }
    //function kosongan
    function kosong(){
      document.getElementById('id_kategori').value="";
      document.getElementById('nama_kategori').value="";
    }

    


    //simpan
    $('#click-simpan').on('click',function(e){
      
      var datanya = new FormData(document.getElementById("formnya"));
      $.ajax({
        type: "POST",
        url: '<?php echo site_url('kategori/add'); ?>',
        mimeType:"multipart/form-data",
        dataType: "JSON",
        data: datanya,
        processData:false,
        contentType:false,
       cache:false,
        success: function(data){
          $('[name="id_kategori"]').val("");
          $('[name="nama_kategori"]').val("");
          $('[name="deskripsi_kategori"]').val("");
          showRecord();
          window.alert("Data berhasil disimpan");
        },
        error: function(data){
          console.log(data);
        }
      });
      
      $(".formtambah").fadeIn(1000);
      return false;
      
    });
    //edit
    //ambil datanya dulu
    $('#showData').on('click','.item_edit', function(){
      kosong();
      var id_kategori = $(this).data('id_kategori');
      var nama_kategori = $(this).data('nama_kategori');
      var deskripsi_kategori= $(this).data('deskripsi_kategori');
      console.log(satuan);
      
      $('#Modal_Edit').modal('show');
      $('[name="id_kategori"]').val(id_kategori);
      $('[name="nama_kategori"]').val(nama_kategori);
      $('[name="deskripsi_kategori"]').val(deskripsi_kategori);   
    });

    //update record to database
    $('#btn_update').on('click',function(){
      var datanya = new FormData(document.getElementById("formnya2"));
      $.ajax({
          type : "POST",
           mimeType:"multipart/form-data",
        dataType: "JSON",
        data: datanya,
          url  : "<?php echo site_url('Kategori/edit')?>",
        processData:false,
        contentType:false,
       cache:false,
        // data: {id_barang:id_barang, namabarang:namabarang, harga:harga, satuan:satuan, stok:stok, kategori:kategori, gambar:gambar, deskripsi:deskripsi},
          success: function(data){
              $('[name="id_kategori_edit"]').val("");
              $('[name="nama_kategori_edit"]').val("");
              $('[name="deskripsi_kategori_edit"]').val("");
              $('#Modal_Edit').modal('hide');
              showRecord();
          }
      });
      return false;
    });

    //hapus
    //ambil datanya dulu
    $('#showData').on('click','.item_delete',function(){
      var id_kategori = $(this).data('id_kategori');
        
      $('#modalDelete').modal('show');
      $('[name="id_kategori_delete"]').val(id_kategori);
    });

    //delete record for db
    $('#btn_delete').on('click', function(){
      var id_kategori = $('#id_kategori_delete').val();
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('Kategori/hapus')?>",
        dataType: "JSON",
        data:{id_kategori :id_kategori},
        success : function(data){
          $('[name="id_barang_delete"]').val("");
          $('#modalDelete').modal('hide');
          showRecord();
        }
      });
      return false;
    });
    
  }); //akhir
</script>
<!-- Script -->

</body>
</html>
