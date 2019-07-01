using Newtonsoft.Json;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.Http;
using System.Text;
using System.Threading.Tasks;

using Xamarin.Forms;
using Xamarin.Forms.Xaml;
using Plantal.CLIENTE;

namespace Plantal.ADMINISTRADOR
{
	[XamlCompilation(XamlCompilationOptions.Compile)]
	public partial class AddPlanta : ContentPage
	{
        private string BASE_URL = API.BASE_URL;
        private HttpClient _client = new HttpClient();
        public AddPlanta ()
		{
			InitializeComponent ();
		}

        private async void Button_Clicked(object sender, EventArgs e)
        {
            await Navigation.PushModalAsync(new MenuAdmin());
        }

        private async void Button_Clicked_1(object sender, EventArgs e)
        {
            PlantaObj p = new PlantaObj();
            p.nomeCientifico = nomeCientifico.Text;
            p.nomeComum = nome.Text;
            p.especie = especie.Text;
            p.familia = familia.Text;
            p.ordem = ordem.Text;
            p.fotosURL = fotos.Text;
            p.qrcode = qrcode.Text;
            p.descricao = descricao.Text;
       

            var content = JsonConvert.SerializeObject(p);
            HttpResponseMessage response = null;
            HttpContent contents = new StringContent(content);


            response = await _client.PostAsync(BASE_URL + "addPlant", contents);

            var result = await response.Content.ReadAsStringAsync();

            var ok = JsonConvert.DeserializeObject<OK>(result);
            if (ok.ok == 1)
            {
                await Navigation.PushModalAsync(new MenuAdmin());
            }
            else
            {
                erro.Text = "Erro ao registar planta";
            }

        }
    }
    public class OK
    {
        public int ok { get; set; }
    }
}