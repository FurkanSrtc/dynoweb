<template>

 <dashboard :id="'dashExample'">
      <dash-layout v-for="layout in dlayouts" v-bind="layout" :debug="true" :key="layout.breakpoint">

        <dash-item v-for="item in layout.items" v-bind.sync="item" :key="item.id">
          <div class="content">

          </div>
        </dash-item>
      </dash-layout>
    </dashboard>
</template>

<script>
import { Dashboard, DashLayout, DashItem } from "vue-responsive-dash";

export default {
  components: {
    Dashboard,
    DashLayout,
    DashItem
  },
  data() {
    return {
      dlayouts: [
        {
          breakpoint: "xl",
          numberOfCols: 48,
          items: [
            { id: "1", x: 0, y: 0, width: 1, height: 1 },
            { id: "2", x: 1, y: 0, width: 2, height: 1 },
          ]
        },
        {
          breakpoint: "lg",
          breakpointWidth: 1200,
          numberOfCols: 40,
          items: [
            { id: "1", x: 0, y: 0, width: 1, height: 1 },
            { id: "2", x: 1, y: 0, width: 2, height: 1 },
            { id: "3", x: 4, y: 2, width: 5, height: 1 },
          ]
        },
        {
          breakpoint: "md",
          breakpointWidth: 996,
          numberOfCols: 32,
          items: [
            { id: "1", x: 0, y: 0, width: 1, height: 1 },
            { id: "2", x: 4, y: 2, width: 2, height: 1 },
          ]
        },
        {
          breakpoint: "sm",
          breakpointWidth: 768,
          numberOfCols: 16,
          items: [
            { id: "1", x: 0, y: 0, width: 1, height: 1 },
            { id: "2", x: 4, y: 2, width: 5, height: 1 },
          ]
        },
        {
          breakpoint: "xs",
          breakpointWidth: 480,
          numberOfCols: 8,
          items: [
            { id: "1", x: 0, y: 0, width: 1, height: 1 },
            { id: "2", x: 1, y: 0, width: 1, height: 1 },
          ]
        },
        {
          breakpoint: "xxs",
          breakpointWidth: 0,
          numberOfCols: 2,
          items: [
            {
              id: "1",
              x: 0,
              y: 0,
              width: 1,
              height: 1
            },
            { id: "2", x: 0, y: 1, width: 1, height: 1 }
          ]
        }
      ]
    };
  }
};
</script>

<style>
.content {
  height: 100%;
  width: 100%;
  border: 2px solid #42b983;
  border-radius: 5px;

}
</style>
