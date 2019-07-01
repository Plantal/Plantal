using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using Xamarin.Forms;
using Xamarin.Forms.Xaml;
using Plantal.CLIENTE;
using System.Net.Http;
using Newtonsoft.Json;

namespace Plantal.ADMINISTRADOR
{
	[XamlCompilation(XamlCompilationOptions.Compile)]
	public partial class Editar_Eliminar : ContentPage
	{
        private HttpClient _client = new HttpClient();
        public Editar_Eliminar ()
		{
			InitializeComponent ();
            get_user();

        }
        //voltar
        private async void Button_Clicked_1(object sender, EventArgs e)
        {
            await Navigation.PushModalAsync(new MenuCliente());
        }
        //delete
        private async void Button_Clicked(object sender, EventArgs e)
        {
            if (API.USER_ID == null) { return; }

            HttpResponseMessage response = null;

            response = await _client.DeleteAsync(API.BASE_URL + "account/" + API.USER_ID);

            var result = await response.Content.ReadAsStringAsync();

            var ok = JsonConvert.DeserializeObject<OK>(result);
            if (ok.ok == 1)
            {
                await Navigation.PushModalAsync(new MainPage());
            }
            else
            {
                erro.Text = "Erro ao gravar dados";
            }

            
        }

   
        private async void get_user() {

           

            if (API.USER_ID == null) { return; }

            HttpResponseMessage response = null;

            response = await _client.GetAsync(API.BASE_URL + "account/" + API.USER_ID);

            var result = await response.Content.ReadAsStringAsync();

            var p = JsonConvert.DeserializeObject<List<Cliente>>(result);

           


            if (p.Count > 0)
            {
                nome.Text = p[0].nome;
              //  username.Text = p[0].username;
                password.Text = p[0].password;
                confirma_password.Text = p[0].password;
               // tipo.Text = p[0].tipo;
                ano.Text = p[0].ano;
                email.Text = p[0].email;
                turma.Text = p[0].turma;
                data_nascimento.Date = Convert.ToDateTime(p[0].data_nascimento);
               
                erro.Text = "";
            }
            else
            {
                erro.Text = "Planta não encontrada";
            }


        }
        //save
        private async Task save()
        {
            Cliente c = new Cliente();
            c.iduser = API.USER_ID;
           // c.username = username.Text;
            c.password = password.Text;
            c.email = email.Text;
            c.nome = nome.Text;
           // c.tipo = tipo.Text;
            c.ano = ano.Text;
            c.turma = turma.Text;
            c.data_nascimento = data_nascimento.Date.ToShortDateString();
           


            var content = JsonConvert.SerializeObject(c);
            HttpResponseMessage response = null;
            HttpContent contents = new StringContent(content);


            response = await _client.PutAsync(API.BASE_URL + "account", contents);

            var result = await response.Content.ReadAsStringAsync();

            var ok = JsonConvert.DeserializeObject<OK>(result);
            if (ok.ok == 1)
            {
                await Navigation.PushModalAsync(new MenuCliente());
            }
            else
            {
                erro.Text = "Erro ao gravar dados";
            }

        }

        private async void Button_Clicked_3(object sender, EventArgs e)
        {
           await save();
        }
    }



    
}