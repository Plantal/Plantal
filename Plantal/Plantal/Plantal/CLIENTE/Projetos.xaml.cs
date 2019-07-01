using Newtonsoft.Json;
using System;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Diagnostics;
using System.Linq;
using System.Net.Http;
using System.Text;
using System.Threading.Tasks;

using Xamarin.Forms;
using Xamarin.Forms.GoogleMaps;
using Xamarin.Forms.Xaml;

namespace Plantal.CLIENTE
{
	[XamlCompilation(XamlCompilationOptions.Compile)]
	public partial class Projetos : ContentPage
	{
        public System.Collections.IList ItemsSource = new List<String>();
        private string BASE_URL = API.BASE_URL;
        private HttpClient _client = new HttpClient();
        List<Projeto> p;

       
        public  Projetos ()
		{
			InitializeComponent ();

            set_plantAsync();

            
        }
        private async Task set_plantAsync()
        {
            HttpResponseMessage response = null;

            response = await _client.GetAsync(API.BASE_URL + "project");

            var result = await response.Content.ReadAsStringAsync();

             p = JsonConvert.DeserializeObject<List<Projeto>>(result);

            Debug.WriteLine("PROJETOS: " + p.Count);


            if (p.Count > 0)
            {
                

                foreach (var item in p)
                {
                    //ItemProject i = new ItemProject();
                    // i.nome = item.nome;
                    //  i.id = item.idProjeto;
                    if (!pro.Items.Contains(item.nome))
                    {
                        pro.Items.Add(item.nome);
                    }
                    

                }

              //  pro.SetBinding(Picker.ItemsSourceProperty, "ItemProject");
              //  pro.ItemDisplayBinding = new Binding("nome");
               // pro.ItemsSource = ItemsSource;
                pro.SelectedIndex = 0; 
           
                
                map.MoveToRegion(MapSpan.FromCenterAndRadius(new Position(p[0].latitude, p[0].longitude), Distance.FromMeters(100)), true);
                Pin _pin = null;
                foreach (var project in p)
                {
                    
                    if(p[0].idProjeto == project.idProjeto)
                    {
                         _pin = new Pin()
                        {
                            Type = PinType.Generic,
                            Label =  project.nomeComum +" "+ project.nomeCientifico,
                            Address = "",
                            Position = new Position(project.lat_plant, project.lon_plant)
                        };
                        map.Pins.Add(_pin);
                    };
                
                }
                map.SelectedPin = _pin;

            }
           

        }

        private async void Button_Clicked(object sender, EventArgs e)
        {
            await Navigation.PushModalAsync(new MenuCliente());
        }

        private void Pro_SelectedIndexChanged(object sender, EventArgs e)
        {

            map.Pins.Clear();

           map.MoveToRegion(MapSpan.FromCenterAndRadius(new Position(p[pro.SelectedIndex].latitude, p[pro.SelectedIndex].longitude), Distance.FromMeters(100)), true);
            Pin _pin = null;
            String nome = (String)pro.SelectedItem;
            int? project_id = -1;
            foreach (var item in p)
            {
                if (item.nome.Equals(nome))
                {
                    project_id = item.idProjeto;
                    break;
                }
            }
            foreach (var project in p)
            {

                if (project_id != -1 && project_id == project.idProjeto)
                {
                    _pin = new Pin()
                    {
                        Type = PinType.Generic,
                        Label = project.nomeComum + " " + project.nomeCientifico,
                        Address = "",
                        Position = new Position(project.lat_plant, project.lon_plant)
                    };
                    map.Pins.Add(_pin);
                };

            }
            map.SelectedPin = _pin;
        }
    }

    public class Projeto
    {
        public int idProjeto { get; set; }
        public string nome { get; set; }
        public double latitude { get; set; }
        public double longitude { get; set; }
        public string nomeCientifico { get; set; }
        public string nomeComum { get; set; }
        public double lat_plant { get; set; }
        public double lon_plant { get; set; }
 
    }
    public class ItemProject
    {
        public string nome { get; set; }
        public int id { get; set; }
    }
}