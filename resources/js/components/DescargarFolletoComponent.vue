<template>
  <div>
    <form @submit.prevent="procesarform">
      <div class="row d-flex justify-content-around">
        <div class="col-xs-12 col-md-4">
          <input
            type="text"
            class="form-control bg-transparent text-white"
            placeholder="Nombres y Apellidos *"
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
            <option value="A">Área dolorosa/parte del cuerpo afectada</option>
            <option value="1">Dolor de cuello y hombro</option>
            <option value="2">Dolor de espalda/lumbar</option>
            <option value="3">Dolor de cadera</option>
            <option value="4">Dolor de rodilla</option>
            <option value="5">Dolor de tobillo y pie</option>
            <option value="6">No sé de donde viene el dolor</option>
            <option value="7">Lesión muscular deportiva o por ejercicio</option>
            <option value="8">Pérdida de balance y equilibrio</option>
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
              Cuál es tu principal preocupación debido a este problema?
            </option>
            <option value="9">Dependencia de analgésicos</option>
            <option value="10">
              No saber que es lo que está pasando con mi cuerpo
            </option>
            <option value="11">Miedo a perder movilidad e independencia</option>
            <option value="12">Riesgo de tener que someterme a cirugia</option>
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
            placeholder="Teléfono *"
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
              Que actividades no puedes realizar o están limitadas por este
              problema
            </option>
            <option value="13">Dormir</option>
            <option value="14">Permanecer sentado</option>
            <option value="15">Permanecer de pie</option>
            <option value="16">Levantar objetos</option>
            <option value="17">Caminar</option>
            <option value="18">Trotar</option>
            <option value="19">Jugar Tenis</option>
            <option value="20">Subir escaleras</option>
            <option value="21">Viajar</option>
            <option value="22">Disfrutar con familia y amigos</option>
            <option value="23">Otra</option>
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
              Cuanto tiempo llevas sufriendo por este problema?
            </option>
            <option value="24">Unos pocos días</option>
            <option value="25">1-2 semanas</option>
            <option value="26">2-4 semanas</option>
            <option value="27">1-3 meses</option>
            <option value="28">6-12 meses</option>
            <option value="29">Varios años</option>
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
              La meta principal que te gustaría que te ayudara a lograr es:
            </option>
            <option value="30">Reducir el dolor</option>
            <option value="31">Reducir rigidez y mejorar movilidad</option>
            <option value="32">Empezar actividad física</option>
            <option value="33">Mantener mi nivel de actividad física</option>
            <option value="34">Evitar dependencia a analgésicos</option>
            <option value="35">Entender mi patología</option>
            <option value="36">Aprender a manejar mi patología</option>
            <option value="37">
              Mantenerme activo y resolver mi dolor antes de que empeore
            </option>
            <option value="38">Mejorar mi balance y equilibrio</option>
            <option value="39">
              Aprender la forma correcta de hacer ejercicios y progresarlos
            </option>
            <option value="40">Evitar o posponer cirugía</option>
          </select>
        </div>
      </div>
      <div class="row">&nbsp;</div>
      <div class="row d-flex justify-content-center">
        <div class="col-xs-6 col-md-6">
          <div class="form-group">
            <label class="text-dark" for="mensaje">Mensaje</label>
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
                >Acepto los términos y condiciones</a
              ></label
            >
          </div>
        </div>
        <div class="col-xs-6 col-md-6">
          <button class="btn btn-primary" type="submit" :disabled="bloquear">
            Descargar
          </button>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-10">
          <h4 class="text-justify my-5">
            <i
              >Pero ya sabes, este reporte es solo el comienzo y no es
              suficiente para
              <b>llevarte al nivel de independencia, movilidad y bienestar</b>
              que buscas y que <b>mereces</b>. Permítete explorar lo que un
              <b>fisioterapeuta altamente experimentado</b> puede ofrecerle a tu
              <b>salud y calidad de vida</b>.</i
            >
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
        "material-cuello-y-hombro-espanol.pdf",
        "material-dolor-lumbar-espanol.pdf",
        "material-cadera-rodilla-espanol.pdf",
        "material-prevencion-de-lesiones-espanol.pdf",
        "Politica de protección y tratamiento de datos ALRB.pdf",
      ],
    };
  },
  methods: {
    procesarform() {
      axios
        .post(this.url + "/preguntas", {
          cliente: this.cliente,
          preguntas: this.preguntas,
        })
        .then((resp) => {
          console.log(resp);
          // if (resp.status == 200) {
          //   this.download(this.tipo);
          // }
        })
        .catch((error) => console.log(error));
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
