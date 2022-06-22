<template>
	<div>
         <li class="list-group-item" :class="className"><slot></slot></li>
       <small class="badge float-right " :class="badgeClass">you</small>   
    </div>
   

</template>

<script type="text/javascript">
    
    export default{
                   props:[
                         'color'
                   ],

                   computed:{

                        className(){

                             return 'list-group-item-'+this.color;

                        },

                        badgeClass(){

                            return 'badge-'+this.color;
                        }

                   }

                   
                   

    }
</script>