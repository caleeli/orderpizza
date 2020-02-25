<template>
  <panel name="Principal" icon="fa fa-user" class="panel-success">
    <button class="btn btn-primary" @click="orderPizza">Start PM4 Order Pizza</button>
  </panel>
</template>

<script>
export default {
  path: "/",
  mixins: [],
  data() {
    return {
      today: ''
    };
  },
  methods: {
    orderPizza() {
        window.axios({
            method: 'post',
            url: '/orderpizza',
            data: {
                type: ''
            }
        });
    }
  }
};
</script>
