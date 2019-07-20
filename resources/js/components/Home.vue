<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Information</div>
                    <div class="card-body">
                        Home Page
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="margin-bottom: 0.75rem;">

                    <div class="text-center card-header">
                        Server Status
                    </div>

                    <div class="card-body">
                        <p>Server IP: </p>
                        <p>Server Status: </p>
                        <p>Minecraft Version: </p>
                        <p>Players Online: </p>
                        <p>Registered Players: </p>
                    </div>
                </div>

                <div class="card">
                    <div class="text-center card-header">DynMap
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                values: 0,
            }
        }
    }
</script>

<style scoped>

</style>
