<template>
    <div class="dropdown" style="display:contents;">
        <ul class="dropdown-menu" :id="'tagDropdownEdit_'+ todo.id">
            <li>
                <label>
                    <input v-model="todo.tag" @change="$emit('changed-tag')" value="blue" type="radio" >
                    <img class="filterListItem" src="img/blue.png">
                </label>
            </li>
            <li>
                <label>
                    <input v-model="todo.tag" @change="$emit('changed-tag')" value="green" type="radio" >
                    <img class="filterListItem" src="img/green.png">
                </label>
            </li>
        </ul>
    </div>
</template>
<script>
export default {
    props: ['todo'],
}
</script>

<style scoped>
#tagDropdownEdit_new {
    top: 102%!important;
    left: 92%!important;
}
.dropdown-menu {
    min-width:3rem;
    position: absolute;
    top:50%;
    left:50%;
    transform: translate(45%, -14%);
}

</style>
