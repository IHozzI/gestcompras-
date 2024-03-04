//const _SERVIDORhd = "https://www.esmonserrate.org/";

const _SERVIDORhd=  window.location.protocol + "//" + window.location.host + "/";

//console.log(_SERVIDORhd)


const SeccoesPorTotais = async () => {

  let strHtml = `
                `
  const response = await fetch(_SERVIDORhd +`public/seccoes/totais`)
  const lv = await response.json()

  for (const artigo of lv) {
    strHtml += `
              <!-- Category item -->
              <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded bg-dark-overlay-4 " style="background-image:url(${artigo.image}); background-position: center left; background-size: cover;">
                <div class="p-3">
                  <a href="https://www.esmonserrate.org/public/servicos/${artigo.sectionid}/10" class="stretched-link btn-link fw-bold text-white h5">${artigo.title}</a>
                </div>
              </div>      
               `
  }
 document.getElementById("secoes").innerHTML = strHtml
}

/////////////////////////////////////////////////////////////////////////////////////////////


const addAlbum = async (tit,descricao,pai,accao) => {

      const response = await fetch(_SERVIDORt+`public/album/add`, {
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                    },
                method: "POST",
                body: `tit=${tit}&descricao=${descricao}&pai=${pai}&accao=${accao}`
            })
const lv = await response.text()
}
