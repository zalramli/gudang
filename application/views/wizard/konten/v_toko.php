<form method="POST" action="">
    <div class="container">
        <div id="app">
            <step-navigation :steps="steps" :currentstep="currentstep">
            </step-navigation>

            <div v-show="currentstep == 1">
                <h3>Pilih Jenis Toko</h3>

                <div class="form-group">
                    <select class="form-control" name="select">
                        <option value="">Jenis Toko</option>
                        <option>Elektronik</option>
                        <option>Properti</option>
                        <option>Aksesoris</option>
                    </select>
                </div>

            </div>

            <div v-show="currentstep == 2">
                <h3>Form Data Toko</h3>
                <div class="form-group">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Toko">
                </div>

                <div class="form-group">
                    <textarea class="form-control" name="alamat" rows="4" placeholder="Alamat"></textarea>
                </div>
            </div>

            <div v-show="currentstep == 3">
                <h3>Form Data Manager</h3>
                <div class="form-group">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Manager">
                </div>
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
            </div>

            <step v-for="step in steps" :currentstep="currentstep" :key="step.id" :step="step" :stepcount="steps.length" @step-change="stepChanged">
            </step>

            <script type="x-template" id="step-navigation-template">
                <ol class="step-indicator">
                <li v-for="step in steps" is="step-navigation-step" :key="step.id" :step="step" :currentstep="currentstep">
                </li>
            </ol>
        </script>

            <script type="x-template" id="step-navigation-step-template">
                <li :class="indicatorclass">
                <div class="step"><i :class="step.icon_class"></i></div>
                <div class="caption hidden-xs hidden-sm">Step <span v-text="step.id"></span>: <span v-text="step.title"></span></div>
            </li>
        </script>

            <script type="x-template" id="step-template">
                <div class="step-wrapper" :class="stepWrapperClass">
                <button type="button" class="btn btn-primary" @click="lastStep" :disabled="firststep">
                    Back
                </button>
                <button type="button" class="btn btn-primary" @click="nextStep" :disabled="laststep">
                    Next
                </button>
                <button type="submit" class="btn btn-primary" v-if="laststep">
                    Submit
                </button>
            </div>
        </script>
        </div>
    </div>
</form>