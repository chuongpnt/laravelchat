<template>
	<div class="message" :class="{'is-current-user': $root.currentUserLogin.id === message.user.id}">
		<div class="message-item user-name">
			{{ message.user.name}} : {{ message.message }}
		</div>
		<!-- <div class="message-item timestamp">
			| {{ message.created_at.split(' ')[1] }}: 
		</div> -->
		<div class="message-item text-message">
			
		</div>
	</div>
</template>

<script>
	export default {
        props: {
          message: {
            type: Object,
            default: {}
          }
        }
    }
</script>