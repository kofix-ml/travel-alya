@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

      <form class="form-horizontal">
        <fieldset>
          <div class="col-md-12">
            <div id="manifestblock" class="col-md-6">
              <!-- Form Name -->
              <legend>Personal Details</legend>

              <!-- File Button --> 
              <div class="form-group">
                <label class="col-md-4 control-label" for="photoapp">Gambar</label>
                <div class="col-md-4">
                  <input id="photoapp" name="photoapp" class="input-file" type="file">
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="applicantname">Nama (Seperti dalam passport)</label>  
                <div class="col-md-8">
                <input id="applicantname" name="applicantname" type="text" placeholder="Sila masukkan nama penuh" class="form-control input-md" required="">
                  
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="ic_num">NRIC</label>  
                <div class="col-md-5">
                <input id="ic_num" name="ic_num" type="text" placeholder="No. Kad Pengenalan" class="form-control input-md" required="">
                  
                </div>
              </div>

              <!-- Select Basic -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="pakej">Pilih Pakej</label>
                <div class="col-md-4">
                  <select id="pakej" name="pakej" class="form-control">
                    <option value="0">Sila Pilih</option>
                    <option value="1">Option one</option>
                    <option value="2">Option two</option>
                  </select>
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="mom_name">Nama Ibu</label>  
                <div class="col-md-8">
                <input id="mom_name" name="mom_name" type="text" placeholder="ex. Siti Aminah binti Ahmad" class="form-control input-md" required="">
                  
                </div>
              </div>

              <!-- Textarea -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="address">Alamat</label>
                <div class="col-md-8">                     
                  <textarea class="form-control" id="address" name="address"></textarea>
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="poskod">Poskod</label>  
                <div class="col-md-4">
                <input id="poskod" name="poskod" type="text" placeholder="Poskod" class="form-control input-md" required="">
                  
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="birth_place">Tempat Lahir</label>  
                <div class="col-md-8">
                <input id="birth_place" name="birth_place" type="text" placeholder="Tempat Lahir" class="form-control input-md" required="">
                  
                </div>
              </div>

              <!-- Select Basic -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="jantina">Jantina</label>
                <div class="col-md-4">
                  <select id="jantina" name="jantina" class="form-control">
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                  </select>
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="phone_num">Phone Number</label>  
                <div class="col-md-4">
                <input id="phone_num" name="phone_num" type="text" placeholder="ex. 0131112345" class="form-control input-md" required="">
                  
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="email">E-mel</label>  
                <div class="col-md-8">
                <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">
                  
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="warganegara">Warganegara</label>  
                <div class="col-md-4">
                <input id="warganegara" name="warganegara" type="text" placeholder="" class="form-control input-md" required="">
                  
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div id="manifestblock" class="col-md-12">
                <legend>Passport Details</legend>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="passport_no">No. Passport</label>  
                  <div class="col-md-8">
                  <input id="passport_no" name="passport_no" type="text" placeholder="ex. A2471826" class="form-control input-md" required="">
                    
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="pass_place">Tempat Passport Dikeluarkan</label>  
                  <div class="col-md-8">
                  <input id="pass_place" name="pass_place" type="text" placeholder="" class="form-control input-md">
                    
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="pass_date_produce">Tarikh Passport Dikeluarkan</label>  
                  <div class="col-md-4">
                  <input id="pass_date_produce" name="pass_date_produce" type="text" placeholder="" class="form-control input-md" required="">
                    
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="pass_date_end">Tarikh Passport Tamat</label>  
                  <div class="col-md-4">
                  <input id="pass_date_end" name="pass_date_end" type="text" placeholder="" class="form-control input-md" required="">
                    
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="status">Status</label>  
                  <div class="col-md-8">
                  <input id="status" name="status" type="text" placeholder="" class="form-control input-md" required="">
                    
                  </div>
                </div>
              </div>
              <div id="manifestblock" class="col-md-12">
                <legend>Employment Details</legend>
      
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="work_name">Nama Majikan/company</label>  
                  <div class="col-md-8">
                  <input id="work_name" name="work_name" type="text" placeholder="ex. Corporate SDN BHD" class="form-control input-md" required="">
                    
                  </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="work_address">Alamat majikan</label>
                  <div class="col-md-8">                     
                    <textarea class="form-control" id="work_address" name="work_address"></textarea>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="work_phone">Telefon Majikan</label>  
                  <div class="col-md-4">
                  <input id="work_phone" name="work_phone" type="text" placeholder="" class="form-control input-md" required="">
                    
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="work_salary">Gaji</label>  
                  <div class="col-md-4">
                  <input id="work_salary" name="work_salary" type="text" placeholder="ex. RM 5000" class="form-control input-md" required="">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="manifestblock" class="col-md-12">
            <h3>Not going relative information</h3>
            <hr>
            <!-- Text input-->
            <div class="row">
              <div class="col-md-6">
                <input id="rel_ungoing" name="rel_ungoing" type="text" placeholder="Nama Waris" class="form-control" required="">
              </div>
              <div class="col-md-2">
                <input id="rel_relation" name="rel_relation" type="text" placeholder="Hubungan" class="form-control" required="">
              </div>
              <div class="col-md-4">
                <input id="rel_phone" name="rel_phone" type="text" placeholder="No. Phone" class="form-control" required="">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-10">
                <textarea class="form-control" placeholder="Alamat" id="rel_addr" name="rel_addr"></textarea>
              </div>
              <div class="col-md-2">
                <input id="rel_poskod" name="rel_poskod" type="text" placeholder="Poskod" class="form-control" required="">
              </div>
            </div>
            

          </div>
          <div id="manifestblock" class="col-md-12">
            <h3>Going with <button id="addbtn" name="addbtn" class="btn btn-success"> Add more <i class="fa fa-plus" aria-hidden="true"></i></button> </h3>
            <hr>
            <!-- Text input-->
            <label class="col-md-1 control-label" for="gowith">1</label> 
            <div class="col-md-5">
              <input id="gowith_name" name="gowith_name" type="text" placeholder="Sila masukkan nama penuh" class="form-control" required="">
            </div>
            <div class="col-md-2">
              <input id="gowith_relation" name="gowith_relation" type="text" placeholder="Hubungan" class="form-control" required="">
            </div>
            <div class="col-md-2">
              <input id="gowith_ic" name="gowith_ic" type="text" placeholder="IC Number" class="form-control" required="">
            </div>
            <div class="col-md-2">
              <input id="gowith_passport" name="gowith_passport" type="text" placeholder="Passport Number" class="form-control" required="">
            </div>

          </div>
          <div class="col-md-12">
            <br>
            <button id="singlebutton" name="singlebutton" class="btn btn-primary btn-block">submit</button>
          </div>
        </fieldset>
      </form>

        
    </div>
</div>
@endsection