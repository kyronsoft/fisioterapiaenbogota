<template>
  <div>
    <form @submit.prevent="procesarform">
      <div class="row d-flex justify-content-around">
        <div class="col-xs-12 col-md-4">
          <input
            type="text"
            class="form-control bg-transparent text-white"
            placeholder="Name and Surname *"
            v-model.trim="cliente.nombres"
          />
        </div>
        <div class="col-xs-12 col-md-4">
          <select
            class="form-control"
            name="pregunta1"
            id="area_dolorosa"
            v-model="preguntas.pregunta1"
          >
            <option value="A">Painful area / part of the body affected</option>
            <option value="1">Neck and shoulder pain</option>
            <option value="2">Back / lumbar pain</option>
            <option value="3">Hip pain</option>
            <option value="4">Knee pain</option>
            <option value="5">Ankle and foot pain</option>
            <option value="6">I don't know where the pain comes from</option>
            <option value="7">Sports or exercise muscle injury</option>
            <option value="8">Loss of balance and equilibrium</option>
          </select>
        </div>
        <div class="col-xs-12 col-md-4">
          <select
            class="form-control"
            name="pregunta2"
            id="preocupacion"
            v-model="preguntas.pregunta2"
          >
            <option value="B">
              What is your main concern due to this problem?
            </option>
            <option value="9">Painkiller dependence</option>
            <option value="10">Not knowing what is happening to my body</option>
            <option value="11">Fear of losing mobility and independence</option>
            <option value="12">Risk of having to undergo surgery</option>
          </select>
        </div>
      </div>
      <div class="row">&nbsp;</div>
      <div class="row d-flex justify-content-around">
        <div class="col-xs-12 col-md-4">
          <input
            type="text"
            class="form-control bg-transparent"
            name="telefono"
            id="telefono"
            placeholder="Phone *"
            v-model.trim="cliente.telefono"
          />
        </div>
        <div class="col-xs-12 col-md-4">
          <select
            class="form-control"
            name="pregunta3"
            id="actividades"
            v-model="preguntas.pregunta3"
          >
            <option value="C">
              What activities you cannot perform or are limited by this problem
            </option>
            <option value="13">Sleep</option>
            <option value="14">Stay seated</option>
            <option value="15">Standing up</option>
            <option value="16">Lift objects</option>
            <option value="17">Walk</option>
            <option value="18">Jogging</option>
            <option value="19">Play tennis</option>
            <option value="20">Climbing stairs</option>
            <option value="21">Travel</option>
            <option value="22">Enjoy with family and friends</option>
            <option value="23">Other</option>
          </select>
        </div>
        <div class="col-xs-12 col-md-4">
          <select
            class="form-control"
            name="pregunta4"
            id="actividades"
            v-model="preguntas.pregunta4"
          >
            <option value="D">
              How long have you been suffering from this problem?
            </option>
            <option value="24">A few days</option>
            <option value="25">1-2 weeks</option>
            <option value="26">2-4 weeks</option>
            <option value="27">1-3 months</option>
            <option value="28">6-12 months</option>
            <option value="29">Several years</option>
          </select>
        </div>
      </div>
      <div class="row">&nbsp;</div>
      <div class="row d-flex justify-content-start">
        <div class="col-xs-12 col-md-4">
          <input
            type="email"
            class="form-control bg-transparent"
            name="email"
            id="email"
            placeholder="Email *"
            v-model.trim="cliente.email"
          />
        </div>
        <div class="col-xs-12 col-md-4">
          <select
            class="form-control"
            name="pregunta5"
            id="metas"
            v-model="preguntas.pregunta5"
          >
            <option value="E">
              The main goal that you would like me to help you achieve is:
            </option>
            <option value="30">Reduce pain</option>
            <option value="31">Reduce stiffness and improve mobility</option>
            <option value="32">Start physical activity</option>
            <option value="33">Maintain my level of physical activity</option>
            <option value="34">Avoid dependence on painkillers</option>
            <option value="35">Understand my pathology</option>
            <option value="36">Learn to manage my pathology</option>
            <option value="37">
              Stay active and resolve my pain before it gets worse
            </option>
            <option value="38">Improve my balance and balance</option>
            <option value="39">
              Learn the correct way to exercise and progress them
            </option>
            <option value="40">Avoid or postpone surgery</option>
          </select>
        </div>
      </div>
      <div class="row">&nbsp;</div>
      <div class="row d-flex justify-content-center">
        <div class="col-xs-6 col-md-6">
          <div class="form-group">
            <label class="text-dark" for="mensaje">Message</label>
            <textarea
              class="form-control"
              name="mensaje"
              id="mensaje"
              cols="50"
              rows="5"
              v-model="cliente.mensaje"
            ></textarea>
          </div>
        </div>
      </div>
      <div class="row">&nbsp;</div>
      <div class="row">
        <div class="col-xs-6 col-md-6 d-flex justify-content-around">
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="checkbox"
              id="inlineCheckbox1"
              value="acepto"
              v-model="cliente.condiciones"
            />
            <label class="form-check-label" for="inlineCheckbox1"
              ><a v-bind:href="url_link"
                >I accept the terms and conditions</a
              ></label
            >
          </div>
        </div>
        <div class="col-xs-6 col-md-6">
          <button class="btn btn-primary" type="submit" :disabled="bloquear">
            Download
          </button>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-10">
          <h4 class="text-justify my-5">
            But you know, this report is only the beginning and it is not enough
            to bring you to the level of independence, mobility and well-being
            that you are looking for and that you deserve. Allow yourself to
            explore what a highly experienced physical therapist can offer to
            your health and quality of life.
          </h4>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  props: ["tipo", "url"],
  data() {
    return {
      cliente: {
        nombres: "",
        telefono: "",
        email: "",
        mensaje: "",
        condiciones: false,
      },
      preguntas: {
        pregunta1: "",
        pregunta2: "",
        pregunta3: "",
        pregunta4: "",
        pregunta5: "",
      },
      folletos: [
        "material-cuello-y-hombro-ingles.pdf",
        "material-dolor-lumbar-ingles.pdf",
        "material-cadera-rodilla-ingles.pdf",
        "material-prevencion-de-lesiones-ingles.pdf",
        "Politica de protección y tratamiento de datos ALRB.pdf",
      ],
    };
  },
  methods: {
    procesarform() {
      axios
        .post(this.url + "/questions", {
          cliente: this.cliente,
          preguntas: this.preguntas,
        })
        .then((resp) => {
          if (resp.status == 200) {
            this.download(this.tipo);
          }
        });
    },
    download(parte) {
      var a = document.createElement("a");

      if (parte == "cuello") {
        a.href = this.url + "/descargas/" + this.folletos[0];
        a.setAttribute("download", this.folletos[0]);
      }

      if (parte == "espalda") {
        a.href = this.url + "/descargas/" + this.folletos[1];
        a.setAttribute("download", this.folletos[1]);
      }

      if (parte == "rodilla") {
        a.href = this.url + "/descargas/" + this.folletos[2];
        a.setAttribute("download", this.folletos[2]);
      }

      if (parte == "deportivas") {
        a.href = this.url + "/descargas/" + this.folletos[3];
        a.setAttribute("download", this.folletos[3]);
      }

      a.click();
    },
  },
  computed: {
    bloquear() {
      if (this.cliente.email.trim() === "") {
        if (this.cliente.condiciones === false) {
          return true;
        }
      }
    },
    url_link() {
      return this.url + "/descargas/" + this.folletos[4];
    },
  },
};
</script>
