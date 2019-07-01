using Microcharts;
using Newtonsoft.Json;
using SkiaSharp;
using System;
using System.Collections.Generic;
using System.Net.Http;
using Xamarin.Forms;
using Xamarin.Forms.Xaml;


namespace Plantal.ADMINISTRADOR
{
    [XamlCompilation(XamlCompilationOptions.Compile)]
    public partial class Estatisticas : ContentPage
    {
        private string[] colors = { "#266489", "#68B9C0", "#90D585", "#ff0000", "#ff6600", "#ffcc99", "#ccffff", "#ff99ff", "#33ccff", "#00ff99", "#77b300", "#3366ff", "#9900ff", "#00cc99", "#009933", "#999966", "#996600", "#3366cc", "#9999ff", "#336600" };
        private HttpClient _client = new HttpClient();
        public Estatisticas()
        {
            InitializeComponent();

            get_stats();

        }

        private async void get_stats()
        {
            

                HttpResponseMessage response = null;

                response = await _client.GetAsync(API.BASE_URL + "stats");

                var result = await response.Content.ReadAsStringAsync();

                var p = JsonConvert.DeserializeObject<List<stats>>(result);

            List<Microcharts.Entry> entries = new List<Microcharts.Entry>();
            if (p.Count > 0)
            {
                int i=0;
                foreach (var item in p)
                {
                    entries.Add(new Microcharts.Entry(item.n_plantas)
                    {
                        Label =item.nome,
                        ValueLabel = item.n_plantas.ToString(),
                        Color = SKColor.Parse(colors[i])
                    }
                );
                    i++;
                }
                

                var chart = new BarChart() { Entries = entries };
                chart.LabelTextSize = 35f;
                //chart.PointSize = 10f;
                chartView.Margin = new Thickness(5d);
                this.chartView.Chart = chart;
            }
                
               


            }
        

        private async void Button_Clicked(object sender, EventArgs e)
        {
            await Navigation.PushModalAsync(new MenuAdmin());
        }
    }
    public class stats
    {
        public string nome { get; set; }
        public int n_plantas { get; set; }
    }
}