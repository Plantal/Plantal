using Newtonsoft.Json;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.Http;
using System.Text;
using System.Threading.Tasks;

using Xamarin.Forms;
using Xamarin.Forms.Xaml;

namespace Plantal.CLIENTE
{
	[XamlCompilation(XamlCompilationOptions.Compile)]
	public partial class Pesquisa : ContentPage
	{
        private string BASE_URL = API.BASE_URL;
        private HttpClient _client = new HttpClient();

        public Pesquisa ()
		{
			InitializeComponent ();
		}

        private async void Button_Clicked(object sender, EventArgs e)
        {
            await Navigation.PushModalAsync(new MenuCliente());
        }

        private async void Q_Clicked(object sender, EventArgs e)
        {
            String query = q.Text.ToString() + "";

           if (String.IsNullOrEmpty(query)) { return; }

            HttpResponseMessage response = null;

            response = await _client.GetAsync(BASE_URL + "plant/" + query);

            var result = await response.Content.ReadAsStringAsync();

            var p = JsonConvert.DeserializeObject<List<PlantaObj>>(result);


          

            if (p.Count > 0 )
            {
                await Navigation.PushModalAsync(new PesquisaDetalhe(p[0]));
                erro.Text = "";
            }
            else
            {
                erro.Text = "Planta não encontrada";
            }

            
        }
      
       
    }
   
 
}