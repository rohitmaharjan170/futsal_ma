<template>
  <!-- @section('sub-title','Player Managment'); -->
  <div class="container-fluid">
    <div class="row justify-content-center mt-2">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title text-blue">Player Management</h3>
            <div class="card-tools">

              <!-- static modal -->

              <!--  <button class="btn btn-primary" data-toggle="modal" data-target="#adduser" >Add New &nbsp<i class="fas fa-user-plus fa-fw"></i></button> -->
              

              <!-- dynamic modal -->


              <button class="btn btn-primary" v-on:click="openmodal">Add New &nbsp<i class="fas fa-user-plus fa-fw"></i></button>

            </div>
          </div>

          <div class="card-body">
            <div class="card-body table-responsive p-0">
              {{players.data}}
              <table class="table table-hover text-nowrap">
                <thead class ="thead-dark">
                  <tr>
                    <th>ID</th>   
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Created at </th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="player in players" :key="player.p_sn">
                    <td>{{player.p_sn}}</td>
                    <td>{{player.p_first_name}}</td>
                    <td>{{player.p_middle_name}}</td>
                    <td>{{player.p_last_name}}</td>
                    <td>{{player.p_mobile}}</td>
                    <td>{{player.p_u_email}}</td>
                    <td>{{player.created_at}}</td>
                    <td><i class="fa fa-edit text-blue" style="margin-right: 20%" > </i>
                      <i class="fa fa-trash text-red"></i></td>
                    </tr>


                    
                    
                  </tbody>
                </table>
              </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addnewuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form @submit.prevent="login" @keydown="form.onKeydown($event)">
          <div class="form-group">
            <label for="name">Name</label>
            <input v-model="form.name" type="text" name="name"
            class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
            <has-error :form="form" field="name"></has-error>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input v-model="form.email" type="text" name="email" placeholder="Email" 
            class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
            <has-error :form="form" field="email"></has-error>
          </div>


          <div class="form-group">
            <label for="password">Password</label>
            <input v-model="form.password" type="password" name="password"
            class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
            <has-error :form="form" field="password"></has-error>
          </div>

          <div class="form-group">
            <label for="conpassword">Confirm Password</label>
            <input v-model="form.conpassword" type="password" name="conpassword"
            class="form-control" :class="{ 'is-invalid': form.errors.has('conpassword') }">
            <has-error :form="form" field="conpassword"></has-error>
          </div>

          <div class="form-group">
            <label for="usertype">User Type </label>
            <select class="custom-select" id="inputGroupSelect01">
              <option selected>Choose...</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
</template>

<script>
export default {
  data()
  {
            // variable decleration insode return ok
            return{
              players:{},

                  // Create a new form instance
                  form: new Form({
                    p_sn:'',
                    p_first_name: '',
                    p_middle_name: '',
                    p_last_name: '',
                    p_mobile:'',
                    p_u_email:'',
                    created_at: '',
                  })
                }},
                mounted(){
                  this.retriveplayers();
                  
                },
                methods:{
                  openmodal(){
                    $('#addnewuser').modal('show');
                  },

                  retriveplayers(){
                    this.form.get('/listplayer')
                    .then(
                      ({data})=>(this.players=data)
                      )
                    
                  },
                },

              }
              </script>

