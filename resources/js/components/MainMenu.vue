<template>
	<div class="dropdown relative">
		<div class="dropdown-toggle flex items-center" aria-haspopup="true" :aria-expanded="isOpen" @click.prevent="isOpen = !isOpen">
			<slot name="trigger-button"></slot>
		</div>
		<transition name="slide">
			<div v-show="isOpen" class="dropdown-menu bg-menu absolute rounded-l-lg mt-4"
					:class="align === 'left' ? 'left-0' : 'right-0'" :style="{ width }">
				<slot name="menu-links"></slot>
			</div>
		</transition>
	</div>
</template>
<script>
export default {
	props: {
		width: { default: 'auto' },
		align: { default: 'left' }
	},
	data() {
		return { isOpen: false }
	},
	watch: {
		isOpen(isOpen) {
			if (isOpen) {
				document.addEventListener('click', this.closeIfClickedOutside);
			}
		}
	},
	methods: {
		closeIfClickedOutside(event) {
			if (! event.target.closest('.dropdown')) {
				this.isOpen = false;
				document.removeEventListener('click', this.closeIfClickedOutside);
			}
		}
	}
}
</script>
<style lang="scss" scoped>
.dropdown {
	.slide-leave-active,
	.slide-enter-active {
		transition: 0.5s;
	}
	#header-section-left & {
		.slide-enter, .slide-leave-to {
			transform: translate(-100%, 0);
		}
	}
	#header-section-right & {
		.slide-enter, .slide-leave-to {
			transform: translate(100%, 0);
		}
	}
}
</style>>

</style>
