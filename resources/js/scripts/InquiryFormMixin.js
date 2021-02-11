export default {
  data() {
    return {
      fields: {},
      errors: {},
      success: false,
      loaded: true,
      action: '',
      download_token: '',
    }
  },

  methods: {

    onSubmit() {
      console.log(this.loaded);
      if (this.loaded) {
        this.loaded = false;
        this.success = false;
        this.errors = {};
        axios.post(this.action, this.fields).then(response => {
          this.fields = {}; //Clear input fields.
          this.loaded = true;
          this.success = true;
          this.download_token = response.data;
        }).catch(error => {
          this.loaded = true;
          if (error.response.status === 422) {
            this.errors = error.response.data.errors || {};
          }
        });
      }
    },

    download: function (event) {
       //window.location.href = '/inquiry/download';
       this.success = false;
       window.open('/inquiry/download/'+this.download_token, "_blank") || window.location.replace('/inquiry/download/'+this.download_token);
    }

  },
}