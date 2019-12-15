<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{title}}</div>
<!--                    <div class=""> {{// massage}}</div>-->

                    <div class="form-group my-3">



                    </div>


                    <input type="text" v-model="note.title">
                    <label for="">{{ note.content_lable}}</label>
                    <textarea v-model="note.content"></textarea>
                    <button class="btn btn-primary" @click="changeText()">Поменять</button>

                    <div class="card-body">
<!--                        I'm an example component.-->
                        <div v-for="(item, index) in notes" :key="index">
                            <h1> {{item.title}} </h1>
                            <p> {{item.content}} </p>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return{
                title: 'Заметки',
                massage: '',
                note:{
                    title: '',
                    content: '',
                    content_lable: 'Описание'
                },
                notes:[
                    {
                        title: 'Заметкиа 1 ',
                        content: 'Описание заметки 1'
                    },
                    {
                        title: 'Заметкиа 2 ',
                        content: 'Описание заметки 2'
                    }


                ]
            }

        },
        methods:{
            changeText(){
                // this.title = 'Message'
                // this.title = this.note.content;
                // this.note.content_lable;
                if(this.note.title == '' || this.note.content == ''){
                    this.massage = 'Данное поле должно ыбть заполненно',
                        return false;
                }
                this.notes.push({
                    title: this.note.title,
                    content: this.note.content
                })
            }

            // addNote(){
            //     this.title = 'Message',
            //         this.note.content_lable;
            //
            // }

        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
