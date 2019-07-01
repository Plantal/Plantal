using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Plantal.ADMINISTRADOR;

using Xamarin.Forms;
using Xamarin.Forms.Xaml;

namespace Plantal.CLIENTE
{
	[XamlCompilation(XamlCompilationOptions.Compile)]
	public partial class MenuCliente : ContentPage
	{
		public MenuCliente ()
		{
			InitializeComponent ();
           

        }

        //Reconhecimento
        private async void Button_Clicked(object sender, EventArgs e)
        {
            await Navigation.PushModalAsync(new Reconhecimento());
        }
        //Pesquisa
        private async void Button_Clicked_1(object sender, EventArgs e)
        {
            await Navigation.PushModalAsync(new Pesquisa());
        }
        //Qr Code
        private async void Button_Clicked_2(object sender, EventArgs e)
        {
            await Navigation.PushModalAsync(new QrCodes());
        }
        //Contatos
        private async void Button_Clicked_3(object sender, EventArgs e)
        {
            await Navigation.PushModalAsync(new Contatos());
        }
       
        //Projetos
        private async void Button_Clicked_4(object sender, EventArgs e)
        {
            await Navigation.PushModalAsync(new Projetos());
        }
       
        //sair
        private async void Button_Clicked_6(object sender, EventArgs e)
        {
            await Navigation.PushModalAsync(new MainPage());
        }
        //conta
        private async void Button_Clicked_5(object sender, EventArgs e)
        {
            await Navigation.PushModalAsync(new Editar_Eliminar());
        }
    }
}