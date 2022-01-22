<template>
	<div class="_1adminOverveiw_table_recent _box_shadow _border_radious _mar_b30 _p20">
			<p>
				<button  class="btn btn-outline-primary order-0" @click="addModal=true">Add admin</button>
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
						<button class="btn btn-outline-primary order-0" type="info" size="small">Edit</button>
						<button class="btn btn-outline-danger order-0" type="error" size="small">Delete</button>
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td class="_table_name">Nima Dorji</td>
					<td class="">nima@gmail.com</td>
					<td class="">Admin</td>
					<td>21/2/2022</td>
					<td>
						<button class="btn btn-outline-primary order-0" type="info" size="small">Edit</button>
						<button class="btn btn-outline-danger order-0" type="error" size="small">Delete</button>
					</td>
				</tr>
				<tr>
					<td>3</td>
					<td class="_table_name">Nima Wangchuk</td>
					<td class="">nima@gmail.com</td>
					<td class="">Admin</td>
					<td>21/2/2022</td>
					<td>
						<button class="btn btn-outline-primary order-0" type="info" size="small">Edit</button>
						<button class="btn btn-outline-danger order-0" type="error" size="small">Delete</button>
					</td>
				</tr>
			</table>
		</div>
	</div>
	
	<!-- === tag adding modal === -->
	<Modal
		v-model="addModal"
		title="Add admin"
		:mask-closable="false"
		:closable="false"

		>
		<div class="space">
			<Input type="text" v-model="data.fullName" placeholder="Full name"  />
		</div>
		<div class="space">
			<Input type="email" v-model="data.email" placeholder="Email"  />
		</div>
		<div class="space">
			<Input type="password" v-model="data.password" placeholder="Password"  />
		</div>
		<div class="space">
			<Select v-model="data.role_id"  placeholder="Select admin type">
				<Option :value="r.id" v-for="(r, i) in roles" :key="i" v-if="roles.length">{{r.roleName}}</Option>
				<!-- <Option value="Editor" >Editor</Option> -->
			</Select>
		</div>
		
		
		

		<div slot="footer">
			<Button type="default" @click="addModal=false">Close</Button>
			<Button type="primary" @click="addAdmin" :disabled="isAdding" :loading="isAdding">{{isAdding ? 'Adding..' : 'Add admin'}}</Button>
		</div>

	</Modal>

	<!-- === tag adding modal === -->
</template>