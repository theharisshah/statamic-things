<template>
    <div class="item mb-1 ">
        <div class="item-move">&nbsp;</div>
        <div class="item-inner">
            <div class="p-3">
            </div>
        </div>
        <dropdown-list class="pr-1">
            <ul class="dropdown-menu">
                <li class="warning"><a @click.prevent="$emit('removed')" v-text="__('Unlink')"></a></li>
            </ul>
        </dropdown-list>
    </div>
</template>

<script>
export default {
    mixins: [Fieldtype],
    data() {
        return {}
    }
};
</script>
