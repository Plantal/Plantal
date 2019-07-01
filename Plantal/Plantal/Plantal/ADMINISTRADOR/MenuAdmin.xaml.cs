using Plantal.ADMINISTRADOR;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using Xamarin.Forms;
using Xamarin.Forms.Xaml;

namespace Plantal
{
	[XamlCompilation(XamlCompilationOptions.Compile)]
	public partial class MenuAdmin : ContentPage
	{
		public MenuAdmin ()
		{
			InitializeComponent ();
		}

       
        //Criar Utilizador
        private async void Button_Clicked_1(object sender, EventArgs e)
        {
            await Navigation.PushModalAsync(new Registar());
        }
       
        //Estatisticas
        private async void Button_Clicked_3(object sender, EventArgs e)
        {
            await Navigation.PushModalAsync(new Estatisticas());
        }
        //sair
        private async void Button_Clicked_4(object sender, EventArgs e)
        {
            await Navigation.PushModalAsync(new MainPage());
        }
        //adicionar planta
        private async void Button_Clicked_2(object sender, EventArgs e)
        {
            await Navigation.PushModalAsync(new AddPlanta());
        }
    }
}