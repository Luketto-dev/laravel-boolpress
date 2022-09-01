<template>
    <div class="d-flex align-items-center">
            
        <img v-if="thumbnailLink" class="img-thumbnail mr-3" :src="thumbnailLink" style="width: 125px" alt="">     
        <div class="custom-file w-50">
            
            <label class="custom-file-label" for="cover_img_file">Aggiungi immagine di copertina</label>
            <input :name="name" @change="onFileChange" type="file" class="custom-file-input" :id="name + '_file'">
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                thumbnailLink: ''
            }
        },
        props: {
            name: String,
        },
        methods: {
            onFileChange(e){
                const files = e.target.files;

                const firstFile = files['0'];

                if (!firstFile) {
                    this.thumbnailLink = '';
                    return;
                }

                this.thumbnailLink = URL.createObjectURL(firstFile)
            }
        }

    }
</script>