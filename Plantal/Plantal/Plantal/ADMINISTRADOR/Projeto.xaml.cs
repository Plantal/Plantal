using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Collections.ObjectModel;
using Xamarin.Forms;
using Xamarin.Forms.Xaml;

namespace Plantal.ADMINISTRADOR
{
	[XamlCompilation(XamlCompilationOptions.Compile)]
	public partial class Projeto : ContentPage
	{
        
        public Projeto ()
		{

			InitializeComponent ();
           
           
            
            projetos.ItemsSource = ItemsFactory.Items;
          
        }
	}
    public static class ItemsFactory
    {
        public static IList<Item> Items { get; set; }

        static ItemsFactory()
        {
            Items = new ObservableCollection<Item>() {
                new Item
                {
                    Name = "Kobe Bryant"

                },
                new Item
                {
                    Name = "LeBron James"

                }
            };
            }

    }
    public class Item
    {
        public string Name { get; set; }

        
    }
}