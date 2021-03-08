<template>


  <div class="container-fluid">
    <div class="row justify-content-center mt-2">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title text-blue">Jersey Management</h3>
            <div class="card-tools">

                  <!-- SEARCH FORM -->
    <form class="form-inline ml-3" >
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>


            </div>
          </div>

          <div class="card-body">
            <div class="card-body table-responsive p-0">
              {{jerseys.data}}
              <table class="table table-hover text-nowrap">
                <thead class ="thead-dark">
                  <tr>
                    <th>SN</th>   
                    <th>Jersey Name</th>
                    <th>Jersey Code</th>
                    <th>Size</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Image</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="jersey in jerseys" :key="jersey.p_sn">
                    <td>{{jersey.j_sn}}</td>
                    <td>
                        <input type="text" v-model="editForm.firstName" class="form-control" v-if="edit">
                        <span v-else>{{jersey.j_name | capitalize}}</span>
                    </td>
                    <td>
                        <input type="text" v-model="editForm.middleName" class="form-control" v-if="edit">
                        <span v-else>{{jersey.j_code  | capitalize}}</span>
                    </td>
                    <td>
                        <input type="text" v-model="editForm.lastName" class="form-control" v-if="edit">
                        <span v-else>{{jersey.j_size | capitalize}}</span>
                    </td>
                    <td>{{jersey.j_price}}</td>
                    <td>{{jersey.j_stock}}</td>
                    <td>{{jersey.j_img}}</td>
                    <td>
                      <button type="button" v-on:click="editPlayer(jersey)" v-if="!edit"><i class="fa fa-edit text-blue"> </i></button>
                      <button type="button" v-on:click="cancelEdit" v-if="edit"><i class="fa fa-edit text-blue"> Cancel</i></button>
                      <button type="button" v-on:click="updatePlayer(jersey,editForm)" class="btn btn-primary" v-if="edit"><i class="fa fa-edit"> Update</i></button>

                      <button type="button" v-on:click="deletePlayer(jersey)" v-if="!edit"><i class="fa fa-trash text-red"></i></button>
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
              jerseys:{},

                  // Create a new form instance
                  form: new Form({
                    j_sn:'',
                    j_name: '',
                    j_code: '',
                    j_size: '',
                    j_price:'',
                    j_stock:'',
                    j_img: '',
                  }),

                  edit:false,
                  editForm:{
                              name:'',
                              code:'',
                              size:'',
                              price:'',
                              stock:'',
                              img:'',
                          }
                }},
                mounted(){
                  this.retrivejerseys();
                  
                },
                filters: {
                        capitalize: function (value) {
                          if (!value) return ''
                          value = value.toString()
                          return value.charAt(0).toUpperCase() + value.slice(1)
                        },
                      },
                methods:{
                  openEditModal(player, index){
                    $('#playerEditModal').modal('show');
                  },

                  retrivejerseys(){
                    this.form.get('/listjersey')
                    .then(
                      ({data})=>(this.jerseys=data)
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

                  deleteJersey(jersey)
                  {
                    if(confirm("Do you really want to delete?"))
                    {
                      this.form.delete("/deleteplayer/"+jersey.j_sn).then(response => {

                        this.retrivejerseys();

                      });
                    }
                  },

                  editJersey(jersey){
                    this.edit=true;
                    // console.log(player.p_u_id);
                    if(jersey.p_sn){
                        this.editForm.name=player.p_first_name;
                        }
                  },

                  cancelEdit(){
                    this.edit=false;
                    this.editForm.name='';
                    },

                  updatePlayer(oldjersey, newjersey){
                    // console.log(newplayer);
                    if(newplayer.name == ""){
                      newplayer.name = '-'
                    }

                    this.form.patch("/updatejersey/"+oldjersey.j_sn+"/"+newjersey.name).then(response=>{
                      this.cancelEdit();
                       this.retrivejerseys();
                    })
                  },

              },

              }
              </script>

