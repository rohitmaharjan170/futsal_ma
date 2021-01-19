<template>


  <div class="container-fluid">
    <div class="row justify-content-center mt-2">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title text-blue">Player Management</h3>
            <div class="card-tools">


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
                    <th>Register Date </th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="player in players" :key="player.p_sn">
                    <td>{{player.p_sn}}</td>
                    <td>
                        <input type="text" v-model="editForm.firstName" class="form-control" v-if="edit">
                        <span v-else>{{player.p_first_name | capitalize}}</span>
                    </td>
                    <td>
                        <input type="text" v-model="editForm.middleName" class="form-control" v-if="edit">
                        <span v-else>{{player.p_middle_name  | capitalize}}</span>
                    </td>
                    <td>
                        <input type="text" v-model="editForm.lastName" class="form-control" v-if="edit">
                        <span v-else>{{player.p_last_name | capitalize}}</span>
                    </td>
                    <td>{{player.p_mobile}}</td>
                    <td>{{player.p_u_email}}</td>
                    <td>{{player.created_at | date('YYYY-MM-DD')}}</td>
                    <td>
                      <button type="button" v-on:click="editPlayer(player)" v-if="!edit"><i class="fa fa-edit text-blue"> </i></button>
                      <button type="button" v-on:click="cancelEdit" v-if="edit"><i class="fa fa-edit text-blue"> Cancel</i></button>
                      <button type="button" v-on:click="updatePlayer(player,editForm)" class="btn btn-primary" v-if="edit"><i class="fa fa-edit"> Update</i></button>

                      <button type="button" v-on:click="deletePlayer(player)" v-if="!edit"><i class="fa fa-trash text-red"></i></button>
                    </td>
                    </tr>


                    
                    
                  </tbody>
                </table>
              </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="playerEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Player</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form @submit.prevent="login" @keydown="form.onKeydown($event)">

          <div class="form-group">
            <label for="name">First Name</label>
            <input v-model="form.p_first_name" type="text" name="p_first_name"
            class="form-control" :class="{ 'is-invalid': form.errors.has('p_first_name') }">
            <has-error :form="form" field="p_first_name"></has-error>
          </div>

          <div class="form-group">
            <label for="name">Middle Name</label>
            <input v-model="form.p_middle_name" type="text" name="middleName"
            class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
            <has-error :form="form" field="name"></has-error>
          </div>

          <div class="form-group">
            <label for="name">Last Name</label>
            <input v-model="form.p_last_name" type="text" name="lastName"
            class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
            <has-error :form="form" field="name"></has-error>
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
                  }),

                  edit:false,
                  editForm:{
                              firstName:'',
                              middleName:'',
                              lastName:'',
                          }
                }},
                mounted(){
                  this.retriveplayers();
                  
                },
                filters: {
                        capitalize: function (value) {
                          if (!value) return ''
                          value = value.toString()
                          return value.charAt(0).toUpperCase() + value.slice(1)
                        },

                        date: function(str) {
                              if (!str) { return '(n/a)'; }
                              str = new Date(str);
                              return str.getFullYear() + '-' + ((str.getMonth() < 9) ? '0' : '') + (str.getMonth() + 1) + '-' +
                                ((str.getDate() < 10) ? '0' : '') + str.getDate();
                            },

                      },
                methods:{
                  openEditModal(player, index){
                    $('#playerEditModal').modal('show');
                  },

                  retriveplayers(){
                    this.form.get('/listplayer')
                    .then(
                      ({data})=>(this.players=data)
                      )
                  },

                  // deletePlayer(p_no, index) {
                  //       axios.delete('/listplayer/'+p_no)
                  //       .then(resp => {
                  //           this.artists.data.splice(index, 1);
                  //       })
                  //       .catch(error => {
                  //           console.log(error);
                  //       })
                  //   },

                  deletePlayer(player)
                  {
                    if(confirm("Do you really want to delete?"))
                    {
                      this.form.delete("/deleteplayer/"+player.p_u_id).then(response => {
                        let index = this.player.indexOf(player);
                        this.players.splice(index,1);

                      });
                    }
                  },

                  editPlayer(player){
                    this.edit=true;
                    // console.log(player.p_first_name);
                    this.editForm.firstName=player.p_first_name;
                    this.editForm.middleName=player.p_middle_name;
                    this.editForm.lastName=player.p_last_name;
                  },

                  cancelEdit(){
                    this.edit=false;
                    this.editForm.firstName='';
                    this.editForm.middleName='';
                    this.editForm.lastName='';
                  },

                  updatePlayer(oldplayer, newplayer){
                    this.form.patch("/updateplayer"+oldplayer.p_u_id, newplayer).then(response=>{
                      this.cancelEdit();
                    })
                  },

              },

              }
              </script>

