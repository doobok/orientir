<template>
    <button
      class="btn btn-error btn-lg"
      :class="cls"
      type="button"
      style="transition: all 0.15s ease 0s;"
      @click="opnForm"
    >
      {{txt}}
    </button>
</template>

<script>
import { mapGetters } from "vuex";
export default {
  props: ['cls', 'txt'],
  methods:{
    opnForm(){
      this.$store.dispatch('TUGGLE_FORM', true);
      this.$store.dispatch('PUSH_SLUG', this.txt );
    },
  },

}


</script>
