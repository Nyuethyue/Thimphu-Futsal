<template>
	<div class="_1adminOverveiw_table_recent _box_shadow _border_radious _mar_b30 _p20">
		<p class="_title0 _p">Users 
			<button class="_button" @click="addModal=true"><Icon type="md-add" /> Add admin</button>
		</p>

		<div class="_overflow _table_div">
			<table class="_table">
				<!-- TABLE TITLE -->
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>User type</th>
					<th>Created at</th>
					<th>Action</th>
				</tr>
				<!-- ITEMS -->
				<!-- <tr v-for="(user, i) in users" :key="i" v-if="users.length">
					<td>{{user.id}}</td>
					<td class="_table_name">{{user.fullName}}</td>
					<td class="">{{user.email}}</td>
					<td class="">{{user.userType}}</td>
					<td>{{user.created_at}}</td>
					<td>
						<Button type="info" size="small" @click="showEditModal(user, i)">Edit</Button>
						<Button type="error" size="small" @click="showDeletingModal(user, i)"  :loading="user.isDeleting">Delete</Button>
						
					</td>
				</tr> -->
				<!-- ITEMS -->
				<tr>
					<td>1</td>
					<td class="_table_name">Dawa Tshering</td>
					<td class="">dawa@gmail.com</td>
					<td class="">Admin</td>
					<td>21/2/2022</td>
					<td>
						<button class="_button" type="info" size="small">Edit</button>
						<button class="_button" type="error" size="small">Delete</button>
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td class="_table_name">Nima Dorji</td>
					<td class="">nima@gmail.com</td>
					<td class="">Admin</td>
					<td>21/2/2022</td>
					<td>
						<button class="_button" type="info" size="small">Edit</button>
						<button class="_button" type="error" size="small">Delete</button>
					</td>
				</tr>
			</table>
		</div>
	</div>
</template>