<script setup>
import GuestLayout from '../../../Layouts/GuestLayout.vue';
import { Head, Link, usePage, useForm } from '@inertiajs/vue3';
const list = usePage();
const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    address: '',
    phone: '',
});

// Admin login function
function CustomerRegisration() {
    form.post(route('user.registration'), {
        onSuccess: () => {
            if (list.props.flash.status === true) {
                successToast(list.props.flash.message);
                form.reset();
            } else {
                errorToast(list.props.flash.message);
            }
        },

        onError: (errors) => {
            if (errors.name) {
                errorToast(errors.name);
            } else if (errors.email) {
                errorToast(errors.email);
            } else if (errors.password) {
                errorToast(errors.password);
            } else if (errors.password_confirmation) {
                errorToast(errors.password_confirmation);
            } else if (errors.address) {
                errorToast(errors.address);
            } else if (errors.phone) {
                errorToast(errors.phone);
            } else {
                errorToast(list.props.flash.message);
            }
        }
    });
}
</script>

<template>

    <Head>
        <title>Car Rent || Sign Up</title>
    </Head>
    <GuestLayout>
        <!-- inner-apge-banner start -->
        <section class="inner-page-banner bg_img overlay-3"
            style="background-image: url('https://img.freepik.com/free-photo/luxurious-car-parked-highway-with-illuminated-headlight-sunset_181624-60607.jpg?t=st=1740403818~exp=1740407418~hmac=9b14b697ac16ffb732fa29ff849348772d69b200b83c1ff603de1f4ca33cb190&w=1060');">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title">Create New account</h2>
                        <ol class="page-list">
                            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                            <li>Registration</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- inner-apge-banner end -->

        <!-- registration-section start -->
        <section class="registration-section pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="registration-block text-center">
                            <div class="registration-block-inner">
                                <h3 class="title">create your account</h3>
                                <form class="registration-form" @submit.prevent="CustomerRegisration()">
                                    <div class="form-group">
                                        <input class="form-control" type="text" id="name" v-model="form.name"
                                            placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="email" v-model="form.email" class="form-control"
                                            placeholder="Email">
                                    </div>
                                    <div class="frm-group">
                                        <input type="phone" id="phone" v-model="form.phone" class="form-control"
                                            placeholder="Phone">
                                    </div>
                                    <div>
                                        <textarea rows="2" id="address" v-model="form.address" class="form-control"
                                            placeholder="Address"></textarea>
                                    </div>
                                    <div class="frm-group mt-3">
                                        <input type="password" id="password" v-model="form.password"
                                            class="form-control" placeholder="Password">
                                    </div>
                                    <div class="frm-group">
                                        <input type="password" id="password_confirmation"
                                            v-model="form.password_confirmation" class="form-control"
                                            placeholder="Confirm Password">
                                    </div>

                                    <button type="submit" class="cmn-btn w-100">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- registration-section end -->
    </GuestLayout>
</template>

<style scoped></style>
