<template>
    
    <div class="container">
        <div class="title text-center">
            <h1>
                <b>Laravel User Management Package</b>
            </h1>
        </div>

        <div class="md-layout text-center">
            <div class="md-layout-item md-size-50 md-small-size-100 mx-auto">
                <router-link :to="{ name: 'login' }" class="md-button md-success md-lg md-theme-default">
                     <div class="md-ripple">
                        <div class="md-button-content">
                            <i class="fa fa-user"></i> Login Page
                        </div> 
                    </div>
                </router-link>
                <router-link :to="{ name: 'register' }" class="md-button md-rose md-lg md-theme-default">
                    <div class="md-ripple">
                        <div class="md-button-content">
                            <i class="fa fa-user-plus"></i> Register Page
                        </div> 
                    </div>
                </router-link>

                <br>
                <br>
                <router-link :to="{ name: 'materialKit' }" class="md-button md-warning md-lg md-theme-default">
                     <div class="md-ripple">
                        <div class="md-button-content">
                            <i class="fa fa-box"></i> Material Kit Demo
                        </div> 
                    </div>
                </router-link>
                <br>
                <router-link :to="{ name: 'landing' }" class="md-lg md-theme-default">Landing Page</router-link>
                |
                <router-link :to="{ name: 'profile' }" class="md-lg md-theme-default">Profile Page</router-link>
            </div>
        </div>

        <br>
        <br>
        <div class="alert alert-danger">
            <div class="container">
                <div class="alert-icon">
                    <i class="md-icon md-icon-font md-theme-default">info_outline</i>
                </div> 
                <b> IMPORTANT! </b> 
                All of the features for this theme available and you can use and create other pages with this theme. we don't delete other sections. <br>
                If you want to use, it's an easy way of using it and will save your time. <br>
                If you don't need another pages you can delete other pages and just take pages you want to use.
            </div>
        </div>
        <br>
        <div class="txt">
            <div class="text-primary">
                You can follow this package in github <a href="https://github.com/Mekaeil/LaravelUserManagement" target="_blank"><b>Laravel User Management</b></a>
                created by <a href="http://mekaeil.me" target="_blank"><b>Mekaeil</b></a>
            </div>
        </div>

    </div>

</template>

 