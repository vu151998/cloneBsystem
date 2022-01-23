<!DOCTYPE html>
<html lang="en">
<livewire:header-admin>
<body style="background-color: white;">

<livewire:navbar-admin>
  <!-- Bootstrap row -->
  <div class="row" id="body-row">

    <livewire:staff-sidebar />
        <!-- MAIN -->
          <div class="col p-4">
              <!--<h1 class="display-4">Thợ</h1>-->
              <!--<div class="card">-->
                  <h5 class="card-header font-weight-light" style="font-size: 28px; background: #fff !important">
                  Phân chia công việc
                </h5>
                  <!-- list -->
                  <!--<div id="test">-->
                  <div class="card-body">
                    {{-- <div class="imgcontainer">

                     </div> --}}
                    <div>
                        <div class="row" >
                          <div class="col col-xs-6">
                              <form class="d-flex">
                              </form>
                              </div>
                            </div>
                            {{-- <div style="width: 100%;float: left;">
                                  <label class="mt-2" style="font-size: 30px;color: blue;text-align: center;">Danh sách đơn hàng</label>
                                </div> --}}
                                <div class="panel-body">
                                    <livewire:staff.list-bill-staff>
                                  </div>
                                </div>
                              </div>
                     <!--</div>-->
                  <!---->
              <!--</div>-->
          </div><!-- Main Col END -->
      </div><!-- body-row END -->
      <!-- add -->



{{-- <script language="javascript">
 
  document.getElementById("id80").onclick = function () {
      document.getElementById("an").style.display = 'none';
  };

  document.getElementById("id080").onclick = function () {
      document.getElementById("an").style.display = 'block';
  };

</script> --}}
@livewireScripts

</body>
</html>
