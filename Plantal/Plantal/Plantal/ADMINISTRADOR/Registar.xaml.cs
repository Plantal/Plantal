using Newtonsoft.Json;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.Http;
using System.Text;
using System.Threading.Tasks;

using Xamarin.Forms;
using Xamarin.Forms.Xaml;

namespace Plantal
{
	[XamlCompilation(XamlCompilationOptions.Compile)]
	public partial class Registar : ContentPage
	{
        public System.Collections.IList ItemsSource { get; set; }
        private string BASE_URL = API.BASE_URL;
        private HttpClient _client = new HttpClient();
        public Registar ()
		{
			InitializeComponent ();
            ItemsSource = new List<String>();
            ItemsSource.Add("Aluno");
            ItemsSource.Add("Professor");
            

            tipo.ItemsSource = ItemsSource;

            data_nascimento.TextColor = Color.White;
        }

        private void Data_nascimento_Focused(object sender, FocusEventArgs e)
        {
            data_title.Opacity = 0;
            data_nascimento.TextColor = Color.Black;

        }
        //
        private async void Button_Clicked(object sender, EventArgs e)
        {
            await Navigation.PushModalAsync(new MenuAdmin());
        }

        private async void Button_Clicked_1(object sender, EventArgs e)
        {
            Cliente c = new Cliente();
            c.username = username.Text;
            c.password = password.Text;
            c.email = email.Text;
            c.nome = nome.Text;
            c.tipo = tipo.SelectedItem.ToString();
            c.ano = ano.Text;
            c.turma = turma.Text;
            c.data_nascimento = data_nascimento.Date.ToShortDateString();
            c.admin =0;


            var content = JsonConvert.SerializeObject(c);
            HttpResponseMessage response = null;
            HttpContent contents = new StringContent(content);


            response = await _client.PostAsync(BASE_URL + "register", contents);

            var result = await response.Content.ReadAsStringAsync();

            var ok = JsonConvert.DeserializeObject<OK>(result);
            if(ok.ok == 1)
            {
                await Navigation.PushModalAsync(new MenuAdmin());
            }
            else
            {
                erro.Text = "Erro ao registar utilizador";
            }

        }

        private async void Button_Clicked_2(object sender, EventArgs e)
        {
            await Navigation.PushModalAsync(new MenuAdmin()); 
        }
    }
    public class OK
    {
        public int ok { get; set; }
    }
    public class Cliente
    {
        //username,password,email,nome,tipo,ano,turma,data_nascimento,admin
        public int? iduser { get; set; }
        public string username { get; set; }
        public string password { get; set; }
        public string email { get; set; }
        public string nome { get; set; }
        public string tipo { get; set; }
        public string ano { get; set; }
        public string turma { get; set; }
        public string data_nascimento { get; set; }
        public int admin { get; set; }
     

    }
}