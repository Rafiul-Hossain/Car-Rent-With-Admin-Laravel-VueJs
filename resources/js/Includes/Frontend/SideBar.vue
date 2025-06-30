<script setup>
import { Link, usePage } from '@inertiajs/vue3';
const authUser = usePage().props.authCustomer.customer;
</script>

<template>
    <div class="sidebar1 pe-4 pb-3">
        <nav class="navbar navbar-secondary">
            <Link href="" class="navbar-brand mx-4 mb-3">
            <h3 class="text-light"><i class="fa fa-car" style="margin-right: 5px;"></i>Car Rent</h3>
            </Link>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle"
                        src="https://img.freepik.com/free-vector/car-company-logo-template_1071-3.jpg?t=st=1740417858~exp=1740421458~hmac=2e24d91586737423b56a55d65b6e45e4ec51d791b25bf74c69b2b80ca90f9640&w=740" alt=""
                        style="width: 40px; height: 40px; margin-right: 10px;">
                </div>
                <div class="ms-3" v-if="authUser">
                    <h6 class="mb-0 text-light">{{ authUser.name }}</h6>
                    <span>{{ authUser.role }}</span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <Link :href="route('show.user.profile', {id: authUser.id})" class="nav-item nav-link" :class="{'active': $page.url === `/user/profile/${authUser.id}`}"><i class="fa fa-user" style="margin-right: 5px;"></i>Profile
                </Link>
                <Link :href="route('show.booking.history', { id: authUser.id })" class="nav-item nav-link"
                    :class="{ 'active': $page.url === `/booking/history/${authUser.id}` }">
                <i class="fa fa-shopping-cart" style="margin-right: 5px;"></i>My Bookings
                </Link>

            </div>
            <div class="navbar-nav w-100" v-if="authUser">
                <a :href="route('user.logout')" class="nav-item nav-link"><i class="fa fa-minus-square"
                        style="margin-right: 5px;"></i>Logout</a>
            </div>
        </nav>

    </div>

</template>

<style scoped></style>
