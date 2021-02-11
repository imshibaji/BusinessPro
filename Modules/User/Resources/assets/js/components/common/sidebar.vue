<template>
<v-navigation-drawer app :expandOnHover="isMobile || mini" :color="colorChoose" permanent :dark="isMobile || mini" :mini-variant="isMobile || mini" >
    <v-list>
        <v-list-item class="px-2">
            <v-list-item-avatar>
                <v-img src="https://randomuser.me/api/portraits/women/85.jpg"></v-img>
            </v-list-item-avatar>
            <v-list-item-content>
                <v-list-item-title class="title">
                    Sandra Adams
                </v-list-item-title>
                <v-list-item-subtitle>sandra_a88@gmail.com</v-list-item-subtitle>
            </v-list-item-content>
        </v-list-item>
    </v-list>
    <v-divider></v-divider>


    <v-list nav dense>
        <v-list-item link>
            <v-list-item-icon>
                <v-icon>mdi-view-dashboard</v-icon>
            </v-list-item-icon>
            <v-list-item-title>Dashboard</v-list-item-title>
        </v-list-item>
        <v-list-item link>
            <v-list-item-icon>
                <v-icon>mdi-folder</v-icon>
            </v-list-item-icon>
            <v-list-item-title>My Files</v-list-item-title>
        </v-list-item>
        <v-list-item link>
            <v-list-item-icon>
                <v-icon>mdi-account-multiple</v-icon>
            </v-list-item-icon>
            <v-list-item-title>Shared with me</v-list-item-title>
        </v-list-item>
        <v-list-item link>
            <v-list-item-icon>
                <v-icon>mdi-star</v-icon>
            </v-list-item-icon>
            <v-list-item-title>Starred</v-list-item-title>
        </v-list-item>
        <v-list-group
        v-for="item in items"
        :key="item.title"
        v-model="item.active"
        :prepend-icon="item.action"
        no-action
      >
        <template v-slot:activator>
          <v-list-item-content>
            <v-list-item-title v-text="item.title"></v-list-item-title>
          </v-list-item-content>
        </template>

        <v-list-item
          v-for="(child, i) in item.items"
          :key="i"
        >
          <v-list-item-content>
            <v-list-item-title v-text="child.title"></v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list-group>
    </v-list>
</v-navigation-drawer>
</template>

<script>
export default {
    props:{
        drawer: Boolean,
        mini: Boolean
    },
    computed: {
        colorChoose: function(){
            if(this.isMobile == true){
                return 'blue';
            }else{
                return this.mini ? 'blue' : 'white';
            }

        },
        isMobile: function(){
            return (
                this.$vuetify.breakpoint.name === "md" ||
                this.$vuetify.breakpoint.name === "sm" ||
                this.$vuetify.breakpoint.name === "xs"
            )? true : false;
        }
    },
    data: () => ({
      items: [
        {
          action: 'mdi-ticket',
          items: [{ title: 'List Item' }],
          title: 'Attractions',
        },
        {
          action: 'mdi-silverware-fork-knife',
          active: true,
          items: [
            { title: 'Breakfast & brunch' },
            { title: 'New American' },
            { title: 'Sushi' },
            { title: 'Breakfast & brunch' },
            { title: 'New American' },
            { title: 'Sushi' },
            { title: 'Breakfast & brunch' },
            { title: 'New American' },
            { title: 'Sushi' },
          ],
          title: 'Dining',
        },
        {
          action: 'mdi-school',
          items: [{ title: 'List Item' }],
          title: 'Education',
        },
        {
          action: 'mdi-run',
          items: [{ title: 'List Item' }],
          title: 'Family',
        },
        {
          action: 'mdi-bottle-tonic-plus',
          items: [{ title: 'List Item' }],
          title: 'Health',
        },
        {
          action: 'mdi-content-cut',
          items: [{ title: 'List Item' }],
          title: 'Office',
        },
        {
          action: 'mdi-tag',
          items: [{ title: 'List Item' }],
          title: 'Promotions',
        },
      ],
    }),
}
</script>

<style>
.fixed {
  position: fixed;
}
.navbar{
    height: 300px;
}
</style>
