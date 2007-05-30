import wx
from blockwindow import BlockWindow

"""
The BoxSizer simply lays out its items in either a horizontal row, or
a vertical stack.  This is the sizer's primary dimension.  Items can
be added such that they get only their minimal size needed, or a
proportion of the available free space.  In addition, items can expand
to fill all available space in the alternate dimension.
"""

labels = "one two three four".split()

class TestFrame(wx.Frame):
    title = "none"
    def __init__(self):
        wx.Frame.__init__(self, None, -1, self.title)

        sizer = self.CreateSizerAndWindows()
        
        # Tell this window to use the sizer for layout
        self.SetSizer(sizer)

        # Change the size of the window to be the minimum
        # needed by the sizer
        self.Fit()



class VBoxSizerFrame(TestFrame):
    title = "Vertical BoxSizer"
    
    def CreateSizerAndWindows(self):
        # Create the sizer
        sizer = wx.BoxSizer(wx.VERTICAL)

        # Create some block windows
        for label in labels:
            bw = BlockWindow(self, label=label, size=(200,30))
            sizer.Add(bw, flag=wx.EXPAND)

        return sizer
    

class HBoxSizerFrame(TestFrame):
    title = "Horizontal BoxSizer"
    
    def CreateSizerAndWindows(self):
        # Create the sizer
        sizer = wx.BoxSizer(wx.HORIZONTAL)

        # Create some block windows
        for label in labels:
            bw = BlockWindow(self, label=label, size=(75,30))
            sizer.Add(bw, flag=wx.EXPAND)

        return sizer

    

class VBoxSizerStretchableFrame(TestFrame):
    title = "Stretchable BoxSizer"
    
    def CreateSizerAndWindows(self):
        # Create the sizer
        sizer = wx.BoxSizer(wx.VERTICAL)

        # Create some block windows
        for label in labels:
            bw = BlockWindow(self, label=label, size=(200,30))
            sizer.Add(bw, flag=wx.EXPAND)

        # Add an item that takes all the free space
        bw = BlockWindow(self, label="gets all free space", size=(200,30))
        sizer.Add(bw, 1, flag=wx.EXPAND)

        return sizer


class VBoxSizerMultiProportionalFrame(TestFrame):
    title = "Proportional BoxSizer"
    
    def CreateSizerAndWindows(self):
        # Create the sizer
        sizer = wx.BoxSizer(wx.VERTICAL)

        # Create some block windows
        for label in labels:
            bw = BlockWindow(self, label=label, size=(200,30))
            sizer.Add(bw, flag=wx.EXPAND)

        # Add an item that takes one share of the free space
        bw = BlockWindow(self, label="gets 1/3 of the free space", size=(200,30))
        sizer.Add(bw, 1, flag=wx.EXPAND)

        # Add an item that takes 2 shares of the free space
        bw = BlockWindow(self, label="gets 2/3 of the free space", size=(200,30))
        sizer.Add(bw, 2, flag=wx.EXPAND)

        return sizer
    
        

app = wx.PySimpleApp()

for klass in [ VBoxSizerFrame,
               HBoxSizerFrame,
               VBoxSizerStretchableFrame,
               VBoxSizerMultiProportionalFrame,
               ]:
    frame = klass()
    frame.Show()

app.MainLoop()
