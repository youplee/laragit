@extends('layouts.site')

@section('content')
<section class="site-section py-sm">
<div class="container" id="contactVue">
    <h2 class="text-center">Contac Form</h2>
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 pb-5">
                    <!--Form with header-->
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Contactanos</h3>
                                    <p class="m-0">Con gusto te ayudaremos</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y Apellido" required v-model="contact.nom">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="email" placeholder="ejemplo@gmail.com" required v-model="contact.email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" placeholder="Envianos tu Mensaje" required v-model="contact.message"></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="button" value="Enviar" class="btn btn-info btn-block rounded-0 py-2" v-on:click="insertContact()">
                                </div>
                            </div>

                        </div>
                    <!--Form with header-->
         </div>
    </div>
</div>
</section>
@endsection
@section('javascripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.8/vue.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
              var vueContact = new Vue({
                el:'#contactVue',

                data:{
                    contact: {
                        nom : '',
                        email : '',
                        message : ''
                    }
    },
    methods :{
        insertContact() {
                    console.log('my contact :', this.contact);
                    axios.post('contact',this.contact)
                        .then(                        
                        (response) => {
                            if(response.data){

                                  this.contact =  {
                                        nom : '',
                                        email : '',
                                        message : ''
                                    }
                            }
                            
                        });
        },
    } 
    }) 
    </script>

@endsection
